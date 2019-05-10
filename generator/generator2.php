<?php

use Illuminate\Support\Collection;

require __DIR__ . '/../vendor/autoload.php';

class Swagger
{
    /**
     * @var Collection
     */
    public $map;

    /**
     * @var Collection
     */
    public $models;

    /**
     * @var Collection
     */
    public $specs;

    /**
     * @var string
     */
    public $version;

    public function __construct($file, $version)
    {
        $this->map = collect([]);
        $this->models = collect([]);
        $this->specs = collect(json_decode(file_get_contents($file), true));
        $this->version = $version;
    }

    public function convertDefinitionToModel($class, $attributes)
    {
        $template = <<<EOF
<?php

namespace {{ Namespace }};

use Spinen\ConnectWise\Support\Model;

/**
 * Class {{ Class }} Version {{ Version }}
 *
 * {{ Description }}
 *{{ Properties }}
 */
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
        $properties = null;

        foreach ($attributes['properties'] as $property => $keys) {
            $type = $this->parseType($keys);

            $casts .= "\n        '" . $property . "' => '" . $type . "',";
            $properties .= "\n * @property " . $type . ' $' . $property;
        }

        $model = preg_replace('|{{ Namespace }}|u', $this->getNamespace(), $template);
        $model = preg_replace('|{{ Version }}|u', $this->version, $model);
        $model = preg_replace('|{{ Class }}|u', $class, $model);
        $model = preg_replace('|{{ Description }}|u', $attributes['description'] ?? 'Model for ' . $class, $model);
        $model = preg_replace('|{{ Casts }}|u', $casts, $model);
        $model = preg_replace('|{{ Properties }}|u', $properties, $model);

        return $model;
    }

    public function getNamespace($class = null)
    {
        return implode(
            '\\',
            array_filter(
                [
                    'Spinen',
                    'ConnectWise',
                    'Models',
                    $this->version,
                    $this->getTitle(),
                    $class,
                ]
            )
        );
    }

    public function getTitle()
    {
        return preg_replace('/\\s+API$/u', '', $this->specs['info']['title']);
    }

    public function parseDefinitions()
    {
        foreach ($this->specs['definitions'] as $class => $attributes) {
            $this->models[$class] = $this->convertDefinitionToModel($class, $attributes);
        };

        return $this;
    }

    public function parseType(array $attributes)
    {
        // Cast to another model
        if (array_key_exists('$ref', $attributes)) {
            return $this->getNamespace(collect(explode('/', $attributes['$ref']))->last());
        }

        $format = $attributes['format'] ?? null;
        $type = $attributes['type'];

        // NOTE: We should consider supporting bigint, but for now, just int
        if (in_array($format, ['int32', 'int64']) || 'integer' === $type) {
            return 'integer';
        }

        if (in_array($format, ['double', 'float']) || 'number' === $type) {
            return 'float';
        }

        if (in_array($format, ['date', 'date-time'])) {
            return 'Carbon\Carbon';
        }

        // NOTE: Would be nice to parse the 'items' key to get the types of the properties
        if ('array' === $type) {
            return 'array';
        }

        if ('boolean' === $type) {
            return 'boolean';
        }

        if ('object' === $type) {
            return 'object';
        }

        // default to string
        return 'string';
    }

    public function parsePaths()
    {
        foreach ($this->specs['paths'] as $path => $actions) {
            if (array_key_exists('get', $actions) && array_key_exists('schema', $actions['get']['responses'][200])) {
                $schema = $actions['get']['responses'][200]['schema'];

                // Single item or collection of items
                $ref = $schema['$ref'] ?? $schema['items']['$ref'];

                $this->map[$path] = $this->getNamespace(collect(explode('/', $ref))->last());
            }
        };

        return $this;
    }
}

class Loader
{
    /**
     * @var Collection
     */
    public $swaggers;

    /**
     * @var string
     */
    public $version;

    public function loadVersion($version)
    {
        $this->version = $version;

        $this->swaggers = collect([]);

        foreach (glob(__DIR__ . "/swagger/" . $this->version . "/*.json") as $swaggerfile) {
            $this->swaggers->push(new Swagger($swaggerfile, $this->version));
        }

        return $this;
    }

    public function process()
    {
        $this->swaggers->each(
            function (Swagger $swagger) {
                $swagger->parseDefinitions();

                $swagger->parsePaths();
            }
        );

        return $this;
    }
}

/** @var Loader $loader */
$loader = new Loader();

foreach (glob(__DIR__ . "/swagger/*") as $version) {
    $version = basename($version);

    $loader->loadVersion($version)
           ->process()->swaggers->each(function (Swagger $swagger) use ($version) {
                $directory = __DIR__ . '/Generated/' . $version . '/' . $swagger->getTitle();

                mkdir($directory, 0755, true);

                $swagger->models->each(function ($contents, $model) use ($directory) {
                        file_put_contents($directory . '/' . $model . '.php', $contents);
                });
            });

    $loader->swaggers->last(
        function (Swagger $swagger) use ($version) {
            $directory = __DIR__ . '/Generated/' . $version;

            // TODO: Deal with file being empty for first run
            $map = collect(json_decode(file_get_contents($directory . '/map.json'), true))
                ->merge($swagger->map)
                ->sort();

            file_put_contents($directory . '/map.json', $map->toJson());
        }
    );
}


