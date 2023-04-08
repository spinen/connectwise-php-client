<?php

namespace Spinen\ConnectWise\Support;

use ArrayAccess;
use ArrayIterator;
use Carbon\Carbon;
use Countable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Database\Eloquent\JsonEncodingException;
use Illuminate\Support\Str;
use InvalidArgumentException;
use IteratorAggregate;
use JsonSerializable;
use Serializable;
use Spinen\ConnectWise\Api\Client;

/**
 * Class Model
 *
 * This class is heavily modeled after Laravel's Eloquent model.  We are wanting the API to be familiar as we use
 * Laravel for most of our projects & want it to be very easy for our developers to use it.  Additionally, it is
 * just so well done that there is no reason not to copy/reuse some of the code.
 *
 * @package Spinen\ConnectWise\Support
 */
abstract class Model implements
    ArrayAccess,
    Arrayable,
    Countable,
    IteratorAggregate,
    Jsonable,
    JsonSerializable
{
    /**
     * _info property
     */
    protected $_info = null;

    /**
     * The collection of attributes for the model
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Client instance to go get related properties
     *
     * @var Client|null
     */
    protected $client;

    /**
     * Model constructor
     *
     * @param array $attributes
     * @param Client|null $client
     */
    public function __construct(array $attributes, Client $client = null)
    {
        $this->client = $client;
        $this->fill($attributes);
    }

    /**
     * Magic method to allow getting related items
     *
     * @param string $method
     * @param mixed $arguments
     *
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        // Call existing method
        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], $arguments);
        }

        // Look to see if the property has a relationship to call
        if ($this->client && ($this->{$method}->_info ?? null)) {
            foreach ($this->{$method}['_info'] as $k => $v) {
                if (Str::startsWith($v, $this->client->getUrl())) {
                    // Cache so that other request will not trigger additional calls
                    $this->setAttribute($method, $this->client->get($v));

                    return $this->{$method};
                }
            }
        }

        trigger_error('Call to undefined method ' . __CLASS__ . '::' . $method . '()', E_USER_ERROR);
    }

    /**
     * Only return the attributes for a var_dump
     *
     * This object proxies the properties to the keys in the attributes array, so only
     * expose it when doing a var_dump as the other properties are not needed in debugging.
     *
     * @return array
     */
    public function __debugInfo()
    {
        return $this->attributes;
    }

    /**
     * Allow the attributes of the model to be accessed like a public property
     *
     * @param string $attribute
     *
     * @return mixed
     */
    public function __get($attribute)
    {
        return $this->getAttribute($attribute);
    }

    /**
     * Allow checking to see if the model has an attribute set
     *
     * @param string $attribute
     *
     * @return bool
     */
    public function __isset($attribute)
    {
        return array_key_exists($attribute, $this->attributes);
    }

    /**
     * Set a property on the model in the attributes
     *
     * @param string $attribute
     * @param mixed $value
     */
    public function __set($attribute, $value)
    {
        $this->setAttribute($attribute, $value);
    }

    /**
     * Convert the model to its string representation
     *
     * @return string
     */
    public function __toString()
    {
        return $this->toJson();
    }

    /**
     * Unset a property on the model in the attributes
     *
     * @param string $attribute
     */
    public function __unset($attribute)
    {
        unset($this->attributes[$attribute]);
    }

    /**
     * Cast a item to a specific object or type
     *
     * @param mixed $value
     * @param string $cast
     *
     * @return mixed
     */
    public function castTo($value, $cast)
    {
        if (is_null($value) || is_object($value)) {
            return $value;
        }

        if (Carbon::class === $cast) {
            return Carbon::parse($value);
        }

        if (class_exists($cast)) {
            return new $cast((array)$value);
        }

        if (strcasecmp('json', $cast) == 0) {
            return json_encode((array)$value);
        }

        if (strcasecmp('collection', $cast) == 0) {
            return new Collection((array)$value);
        }

        if (in_array($cast, ['bool', 'boolean'])) {
            return filter_var($value, FILTER_VALIDATE_BOOLEAN);
        }

        $cast_types = [
            'array',
            'bool',
            'boolean',
            'double',
            'float',
            'int',
            'integer',
            'null',
            'object',
            'string',
        ];

        if (!in_array($cast, $cast_types)) {
            throw new InvalidArgumentException(sprintf("Attributes cannot be casted to [%s] type.", $cast));
        }

        settype($value, $cast);

        // settype returns true/false for pass/fail, not the value
        return $value;
    }

    /**
     * Count the number of properties
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->attributes);
    }

    /**
     * Store the collection of attributes on the model
     *
     * @param array $attributes
     *
     * @return $this
     */
    public function fill(array $attributes)
    {
        foreach ($attributes as $attribute => $value) {
            $this->setAttribute($attribute, $value);
        }

        return $this;
    }

    /**
     * Check to see if there is a getter for the attribute
     *
     * @param string $attribute
     *
     * @return bool
     */
    public function hasGetter($attribute)
    {
        return method_exists($this, $this->getterMethodName($attribute));
    }

    /**
     * Check to see if there is a setter for the attribute
     *
     * @param string $attribute
     *
     * @return bool
     */
    public function hasSetter($attribute)
    {
        return method_exists($this, $this->setterMethodName($attribute));
    }

    /**
     * Is the attribute supposed to be cast
     *
     * @param string $attribute
     *
     * @return bool
     */
    public function hasCast($attribute)
    {
        $cast = $this->getCasts($attribute);

        return !empty($cast) && is_string($cast);
    }

    /**
     * Get the attribute from the model
     *
     * @param string $attribute
     *
     * @return mixed
     */
    public function getAttribute($attribute)
    {
        // Guard against no attribute
        if (!$attribute) {
            return;
        }

        // Use getter on model if there is one
        if ($this->hasGetter($attribute)) {
            return $this->{$this->getterMethodName($attribute)}();
        }

        // Allow for making related calls for "extra" properties in the "_info" property.
        // Cache the results so only 1 call is made
        if (!isset($this->{$attribute}) && isset($this->_info->{$attribute . '_href'})) {
            $this->setAttribute($attribute, $this->client->getAll($this->_info->{$attribute . '_href'}));
        }

        // Pull the value from the attributes
        if (isset($this->{$attribute})) {
            return $this->attributes[$attribute];
        };

        // Attribute does not exist on the model
        trigger_error('Undefined property:' . __CLASS__ . '::$' . $attribute);
    }

    /**
     * Get the array of cast or a specific cast for an attribute
     *
     * @param mixed|null $attribute
     *
     * @return mixed
     */
    public function getCasts($attribute = null)
    {
        if (array_key_exists($attribute, $this->casts)) {
            return $this->casts[$attribute];
        }

        return $this->casts;
    }

    /**
     * Get an iterator for the attributes
     *
     * @return ArrayIterator
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->attributes);
    }

    /**
     * Build the name of the getter for an attribute
     *
     * @param string $attribute
     *
     * @return string
     */
    protected function getterMethodName($attribute)
    {
        return 'get' . Str::studly($attribute) . 'Attribute';
    }

    /**
     * Serialize Json (convert it to an array)
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    /**
     * Allow the model to behave like an associative array, so see if the attribute is set
     *
     * @param string $attribute
     *
     * @return boolean
     */
    public function offsetExists($attribute): bool
    {
        return isset($this->{$attribute});
    }

    /**
     * Allow the model to behave like an associative array, so get attribute
     *
     * @param string $attribute
     *
     * @return mixed
     */
    public function offsetGet($attribute): mixed
    {
        return $this->{$attribute};
    }

    /**
     * Allow the model to behave like an associative array, so set attribute
     *
     * @param string $attribute
     * @param mixed $value
     */
    public function offsetSet($attribute, $value): void
    {
        $this->{$attribute} = $value;
    }

    /**
     * Allow the model to behave like an associative array, so unset attribute
     *
     * @param mixed $attribute
     *
     * @return void
     */
    public function offsetUnset($attribute): void
    {
        unset($this->{$attribute});
    }

    /**
     * Serialize the attributes
     *
     * @return string
     */
    public function serialize()
    {
        return serialize($this->attributes);
    }

    /**
     * Set value on an attribute
     *
     * Since there can be a setter for an attribute, look to see if there is one to delegate the setting.  Then see if
     * the attribute is supposed to be cast to a specific value before setting.  Finally, store the value on the model.
     *
     * @param string $attribute
     * @param mixed $value
     *
     * @return $this
     */
    public function setAttribute($attribute, $value)
    {
        if ($this->hasSetter($attribute)) {
            return $this->{$this->setterMethodName($attribute)}($value);
        }

        if ($this->hasCast($attribute)) {
            $value = $this->castTo($value, $this->getCasts($attribute));
        }

        $this->attributes[$attribute] = $value;

        return $this;
    }

    /**
     * Build the name of the setter for an attribute
     *
     * @param string $attribute
     *
     * @return string
     */
    protected function setterMethodName($attribute)
    {
        return 'set' . Str::studly($attribute) . 'Attribute';
    }

    /**
     * Return the model as an array
     *
     * @return array
     */
    public function toArray()
    {
        // TODO: Need to actually roll through the attributes & make sure that nested objects are converted
        return $this->attributes;
    }

    /**
     * Return the model as JSON
     *
     * @param int $options
     *
     * @return string
     *
     * @throws JsonEncodingException
     */
    public function toJson($options = 0): string
    {
        $json = json_encode($this->jsonSerialize(), $options);

        // @codeCoverageIgnoreStart
        if (JSON_ERROR_NONE !== json_last_error()) {
            throw JsonEncodingException::forModel($this, json_last_error_msg());
        }
        // @codeCoverageIgnoreEnd

        return $json;
    }

    /**
     * Unserialize the attributes
     *
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        $this->attributes = unserialize($serialized);
    }
}
