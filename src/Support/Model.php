<?php

namespace Spinen\ConnectWise\Support;

use ArrayAccess;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use InvalidArgumentException;
use JsonSerializable;

/**
 * Class Model
 *
 * This class is heavily modeled after Laravel's Eloquent model.  We are wanting the API to be familiar as we use
 * Laravel for most of our projects & want it to be very easily to have our developers use it.  Additionally, it is
 * just so well done, that there there is not a reason to not copy/reuse some of the code.
 *
 * @package Spinen\ConnectWise\Support
 */
abstract class Model implements ArrayAccess, Arrayable, Jsonable, JsonSerializable
{
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
     * Model constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes)
    {
        $this->fill($attributes);
    }

    /**
     * Convert the model to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->toJson();
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
        return !is_null($this->getAttribute($attribute));
    }

    /**
     * Set a property on the model in the attributes
     *
     * @param string $attribute
     * @param mixed  $value
     */
    public function __set($attribute, $value)
    {
        $this->setAttribute($attribute, $value);
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
     * @param mixed  $value
     * @param string $cast
     *
     * @return mixed
     */
    public function castTo($value, $cast)
    {
        if (is_null($value)) {
            return $value;
        }

        $class = 'Spinen\ConnectWise\\' . studly_case($cast);

        if (class_exists($class)) {
            return new $class($value);
        }

        if (strcasecmp('carbon', $cast) == 0) {
            return Carbon::parse($value);
        }

        if (strcasecmp('json', $cast) == 0) {
            return json_encode((array)$value);
        }

        if (strcasecmp('collection', $cast) == 0) {
            return new Collection((array)$value);
        }

        $cast_types = [
            "array",
            "bool",
            "boolean",
            "double",
            "float",
            "int",
            "integer",
            "null",
            "object",
            "string",
        ];

        if (!in_array($cast, $cast_types)) {
            throw new InvalidArgumentException(sprintf("Attributes cannot be casted to [%s] type.", $cast));
        }

        settype($value, $cast);

        // settype returns true/false for pass/fail, not the value
        return $value;
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
        if (!$attribute) {
            return;
        }

        if ($this->hasGetter($attribute)) {
            return $this->{$this->getterMethodName($attribute)}();
        }

        // TODO: If there is that "_info" key, then make additional call?
        return $this->attributes[$attribute];
    }

    /**
     * Get the array of cast or a specific cast for an attribute
     *
     * @param null $attribute
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
     * Build the name of the getter for an attribute
     *
     * @param string $attribute
     *
     * @return string
     */
    protected function getterMethodName($attribute)
    {
        return 'get' . studly_case($attribute) . 'Attribute';
    }

    /**
     * Serialize Json (convert it to an array)
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * Allow the model to behave like an associate array, so see if attribute is set
     *
     * @param string $attribute
     *
     * @return boolean
     */
    public function offsetExists($attribute)
    {
        return isset($this->$attribute);
    }

    /**
     * Allow the model to behave like an associate array, so get attribute
     *
     * @param string $attribute
     *
     * @return mixed
     */
    public function offsetGet($attribute)
    {
        return $this->$attribute;
    }

    /**
     * Allow the model to behave like an associate array, so set attribute
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return mixed
     */
    public function offsetSet($attribute, $value)
    {
        $this->$attribute = $value;
    }

    /**
     * Allow the model to behave like an associate array, so unset attribute
     *
     * @param mixed $attribute
     *
     * @return void
     */
    public function offsetUnset($attribute)
    {
        unset($this->$attribute);
    }

    /**
     * Set value on an attribute
     *
     * Since there can be a setter for an attribute, look to see if there is one to delegate the setting.  Then see if
     * the attribute is supposed to be cast to a specific value before setting.  Finally, store the value on the model.
     *
     * @param string $attribute
     * @param mixed  $value
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
        return 'set' . studly_case($attribute) . 'Attribute';
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
     * Return the model as an array
     *
     * @param int $options
     *
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }
}
