<?php

namespace Spinen\ConnectWise\Models\v2018_4\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class IntegrationRequest Version v2018_4
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
