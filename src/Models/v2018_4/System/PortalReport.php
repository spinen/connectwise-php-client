<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalReport
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property boolean $openSameWindowFlag
 * @property boolean $customFlag
 * @property boolean $displayFlag
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
        'name' => 'string',
        'url' => 'string',
        'openSameWindowFlag' => 'boolean',
        'customFlag' => 'boolean',
        'displayFlag' => 'boolean',
    ];
}
