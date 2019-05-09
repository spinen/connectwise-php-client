<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalReport Version v2019_3
 * 
 * Model for PortalReport
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\System\PortalConfigurationReference $portalConfiguration
 * @property string $name
 * @property string $url
 * @property boolean $openSameWindowFlag
 * @property boolean $customFlag
 * @property boolean $displayFlag
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 */
class PortalReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'portalConfiguration' => 'Spinen\ConnectWise\Models\v2019_3\System\PortalConfigurationReference',
        'name' => 'string',
        'url' => 'string',
        'openSameWindowFlag' => 'boolean',
        'customFlag' => 'boolean',
        'displayFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
