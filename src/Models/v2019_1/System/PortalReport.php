<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalReport Version v2019_1
 *
 * Model for PortalReport
 *
 * @property Metadata $_info
 * @property PortalConfigurationReference $portalConfiguration
 * @property bool $customFlag
 * @property bool $displayFlag
 * @property bool $openSameWindowFlag
 * @property int $id
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
