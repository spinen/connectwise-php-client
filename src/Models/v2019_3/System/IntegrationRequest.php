<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class IntegrationRequest Version v2019_3
 * 
 * Model for IntegrationRequest
 *
 * @property string $url
 * @property string $actionName
 * @property string $token
 * @property string $helpUrl
 * @property boolean $disabledFlag
 */
class IntegrationRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'url' => 'string',
        'actionName' => 'string',
        'token' => 'string',
        'helpUrl' => 'string',
        'disabledFlag' => 'boolean',
    ];
}
