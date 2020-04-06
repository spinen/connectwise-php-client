<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ApiRequest Version v2019_5
 *
 * Model for ApiRequest
 *
 * @property FilterValues $Filters
 * @property IRestIdentifiedItem $Entity
 * @property PageValues $Page
 * @property integer $GrandParentId
 * @property integer $Id
 * @property integer $ParentId
 * @property string $Fields
 * @property string $Format
 */
class ApiRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'Entity' => IRestIdentifiedItem::class,
        'Fields' => 'string',
        'Filters' => FilterValues::class,
        'Format' => 'string',
        'GrandParentId' => 'integer',
        'Id' => 'integer',
        'Page' => PageValues::class,
        'ParentId' => 'integer'
    ];
}
