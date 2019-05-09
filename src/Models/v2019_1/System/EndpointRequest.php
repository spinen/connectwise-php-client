<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EndpointRequest Version v2019_1
 * 
 * Model for EndpointRequest
 *
 * @property string $id
 * @property string $contentType
 * @property string $method
 * @property string $relativeUrl
 * @property string $body
 */
class EndpointRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'contentType' => 'string',
        'method' => 'string',
        'relativeUrl' => 'string',
        'body' => 'string',
    ];
}
