<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class IntegrationRequest Version v2019_1
 *
 * Model for IntegrationRequest
 *
 * @property boolean $disabledFlag
 * @property string $actionName
 * @property string $helpUrl
 * @property string $token
 * @property string $url
 */
class IntegrationRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'actionName' => 'string',
        'disabledFlag' => 'boolean',
        'helpUrl' => 'string',
        'token' => 'string',
        'url' => 'string',
    ];
}
