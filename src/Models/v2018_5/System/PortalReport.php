<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalReport Version v2018_5
 *
 * Model for PortalReport
 *
 * @property Metadata $_info
 * @property PortalConfigurationReference $portalConfiguration
 * @property boolean $customFlag
 * @property boolean $displayFlag
 * @property boolean $openSameWindowFlag
 * @property integer $id
 * @property string $name
 * @property string $url
 */
class PortalReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'customFlag' => 'boolean',
        'displayFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'openSameWindowFlag' => 'boolean',
        'portalConfiguration' => PortalConfigurationReference::class,
        'url' => 'string',
    ];
}
