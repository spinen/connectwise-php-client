<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EndpointResponse Version v2019_2
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
        'sort' => 'integer',
    ];
}
