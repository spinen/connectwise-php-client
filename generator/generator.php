<?php

/**
 * This is a quick & dirty script to parse the swagger files to build the response models.
 *
 * There are things about it that needs to be more robust, but it pretty much works, so leaving
 * it as is for now.
 *
 * You have to make a directly local to this script named "swagger" with all of the swagger.json
 * files in it.  Then you just run the script.  It should make all of the models in a folder named
 * "Generated" that you can move to src/Models/
 */

require __DIR__ . '/../vendor/autoload.php';

function determinePropertyType($properties)
{
    if (array_key_exists('format', $properties)) {
        if ('number' == $properties['type']) {
            return $properties['format'];
        }

        if ('string' == $properties['type'] && 'date-time' == $properties['format']) {
            return 'carbon';
        }
    }

    return $properties['type'];
}

function getDefinitions($definition)
{
    $definition = preg_replace('|^#/definitions/|u', '', $definition);

    if (!array_key_exists($definition, $GLOBALS['swagger']['definitions'])) {
        throw new RuntimeException(sprintf("Unexpected definition [%s]", $definition));
    }

    return $GLOBALS['swagger']['definitions'][$definition]['properties'];
}

function getResponse(array $responses, $code = 200)
{
    // Make sure that there is a response for the code
    if (!array_key_exists($code, $responses)) {
        throw new InvalidArgumentException(sprintf("The code [%s] is not in the response", $code));
    }

    // No schema, so just empty array--no response
    if (!array_key_exists('schema', $responses[$code])) {
        return [];
    }

    // Essentially not an array of items
    if (array_key_exists('$ref', $responses[$code]['schema'])) {
        return $responses[$code]['schema'];
    }

    // No items, so just empty array--no response
    if (!array_key_exists('items', $responses[$code]['schema'])) {
        return [];
    }

    // Give back the items
    return $responses[$code]['schema']['items'];
}

function mapResourceToClass($uri, $namespace, $class)
{
    echo "'${uri}' => '" . $namespace . "\\" . $class . "',\n";
}

function parseResponse($response, $uri)
{
    $attributes = [];

    foreach ($response as $name => $item) {
        if ('$ref' !== $name) {
            throw new RuntimeException(sprintf('Unexpected item [%s] in uri [%s]', $name, $uri));
        }

        $definition = getDefinitions($item);

        foreach ($definition as $attribute => $properties) {

            // TODO: Handle recursive defs
            if (!array_key_exists('$ref', $properties)) {
                $attributes[$attribute] = determinePropertyType($properties);
            }
        }
    }

    return $attributes;
}

function processPaths()
{
    $namespace = studly_case($GLOBALS['api']);

    mkdir(__DIR__ . '/Generated/' . $namespace, 0755, true);

    foreach ($GLOBALS['swagger']['paths'] as $uri => $actions) {
        if (array_key_exists('get', $actions)) {
            $docs = $actions['get'];
            $class = str_singular($docs['tags'][0]);
            $file = __DIR__ . '/Generated/' . $namespace . '/' . $class . '.php';

            mapResourceToClass($uri, $namespace, $class);

            $attributes = parseResponse(getResponse($docs['responses']), $uri);

            writeClassFile($file, $namespace, $class, $attributes);
        }
    }
}

function readSwagger($file)
{
    return json_decode(file_get_contents($file), true);
}

function writeClassFile($file_path, $namespace, $class, $attributes)
{
    $template = <<<EOF
<?php

namespace Spinen\ConnectWise\Models\{{ Namespace }};

use Spinen\ConnectWise\Support\Model;

class {{ Class }} extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected \$casts = [{{ Casts }}
    ];
}

EOF;

    $casts = null;

    foreach ($attributes as $attribute => $type) {
        $casts .= "\n        '" . $attribute . "' => '" . $type . "',";
    }

    $file = preg_replace('|{{ Namespace }}|u', $namespace, $template);
    $file = preg_replace('|{{ Class }}|u', $class, $file);
    $file = preg_replace('|{{ Casts }}|u', $casts, $file);

    file_put_contents($file_path, $file);
}

foreach (glob(__DIR__ . "/swagger/*.json") as $swaggerfile) {
    $GLOBALS['api'] = explode('.', basename($swaggerfile))[0];
    $GLOBALS['swagger'] = readSwagger($swaggerfile);

    processPaths();
}


