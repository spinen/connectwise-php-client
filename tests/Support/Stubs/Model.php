<?php

namespace Spinen\ConnectWise\Support\Stubs;

use Spinen\ConnectWise\Support\Model as BaseModel;

class Model extends BaseModel
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'object_attribute'     => 'Models\v2019_2\System\Info',
        'carbon_attribute'     => 'carbon',
        'json_attribute'       => 'json',
        'collection_attribute' => 'collection',
        'boolean_attribute'    => 'boolean',
        'invalid_attribute'    => 'invalid',
        'null_attribute'       => 'string',
    ];

    public function getGetterAttribute()
    {
        return "From getter";
    }

    public function setSetterAttribute($value)
    {
        $this->attributes['setter'] = "From setter";

        return $this;
    }
}
