<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class EndpointResponse Version v2018_6
 *
 * Model for EndpointResponse
 *
 * @property integer $code
 * @property integer $sort
 * @property string $id
 * @property string $message
 */
class EndpointResponse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'code' => 'integer',
        'id' => 'string',
        'message' => 'string',
        'sort' => 'integer'
    ];
}
