<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Info Version v2018_4
 *
 * Model for Info
 *
 * @property string $version
 * @property boolean $isCloud
 * @property string $serverTimeZone
 * @property array $licenseBits
 * @property string $cloudRegion
 */
class Info extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'version' => 'string',
        'isCloud' => 'boolean',
        'serverTimeZone' => 'string',
        'licenseBits' => 'array',
        'cloudRegion' => 'string',
    ];
}
