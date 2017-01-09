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
 * @package Spinen\ConnectWise\Support
 */
abstract class Model implements ArrayAccess, Arrayable, Jsonable, JsonSerializable
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
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
     * @param string $attribute
     *
     * @return mixed|void
     */
    public function __get($attribute)
    {
        return $this->getAttribute($attribute);
    }

    /**
     * @param string $attribute
     *
     * @return bool
     */
    public function __isset($attribute)
    {
        return !is_null($this->getAttribute($attribute));
    }

    /**
     * @param string $attribute
     * @param mixed  $value
     */
    public function __set($attribute, $value)
    {
        $this->setAttribute($attribute, $value);
    }

    /**
     * @param string $attribute
     */
    public function __unset($attribute)
    {
        unset($this->attributes[$attribute]);
    }

    /**
     * @param $value
     * @param $cast
     *
     * @return Collection|string|static
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
     * @param $attribute
     *
     * @return bool
     */
    public function hasGetter($attribute)
    {
        return method_exists($this, $this->getterMethodName($attribute));
    }

    /**
     * @param $attribute
     *
     * @return bool
     */
    public function hasSetter($attribute)
    {
        return method_exists($this, $this->setterMethodName($attribute));
    }

    /**
     * @param $attribute
     *
     * @return bool
     */
    public function hasCast($attribute)
    {
        $cast = $this->getCasts($attribute);

        return !empty($cast) && is_string($cast);
    }

    /**
     * @param $attribute
     *
     * @return mixed|void
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
     * @param null $attribute
     *
     * @return array|mixed
     */
    public function getCasts($attribute = null)
    {
        if (array_key_exists($attribute, $this->casts)) {
            return $this->casts[$attribute];
        }

        return $this->casts;
    }

    /**
     * @param $attribute
     *
     * @return string
     */
    protected function getterMethodName($attribute)
    {
        return 'get' . studly_case($attribute) . 'Attribute';
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @param mixed $attribute
     *
     * @return mixed
     */
    public function offsetExists($attribute)
    {
        return isset($this->$attribute);
    }

    /**
     * @param mixed $attribute
     *
     * @return mixed
     */
    public function offsetGet($attribute)
    {
        return $this->$attribute;
    }

    /**
     * @param mixed $attribute
     * @param mixed $value
     *
     * @return mixed
     */
    public function offsetSet($attribute, $value)
    {
        $this->$attribute = $value;
    }

    /**
     * @param mixed $attribute
     *
     * @return mixed
     */
    public function offsetUnset($attribute)
    {
        unset($this->$attribute);
    }

    /**
     * @param $attribute
     * @param $value
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
     * @param $attribute
     *
     * @return string
     */
    protected function setterMethodName($attribute)
    {
        return 'set' . studly_case($attribute) . 'Attribute';
    }

    /**
     * @return mixed
     */
    public function toArray()
    {
        return $this->attributes;
    }

    /**
     * @param int $options
     *
     * @return mixed
     */
    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }
}
