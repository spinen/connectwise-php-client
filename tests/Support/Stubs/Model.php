<?php

namespace Spinen\ConnectWise\Support\Stubs;

use Carbon\Carbon;
use Spinen\ConnectWise\Models\v2019_4\System\Info;
use Spinen\ConnectWise\Support\Model as BaseModel;

class Model extends BaseModel
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'array_attribute' => 'array',
        'boolean_attribute' => 'boolean',
        'carbon_attribute' => Carbon::class,
        'collection_attribute' => 'collection',
        'float_attribute' => 'float',
        'info_attribute' => Info::class,
        'integer_attribute' => 'integer',
        'invalid_attribute' => 'invalid',
        'json_attribute' => 'json',
        'null_attribute' => 'null',
        'string_attribute' => 'string',
        'object_attribute' => 'object',
    ];

    public function getGetterAttribute()
    {
        return 'From getter';
    }

    public function setSetterAttribute($value)
    {
        $this->attributes['setter'] = 'From setter';

        return $this;
    }
}
