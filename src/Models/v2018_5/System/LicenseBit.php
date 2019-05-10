<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LicenseBit Version v2018_5
 *
 * Model for LicenseBit
 *
 * @property string $name
 * @property boolean $activeFlag
 */
class LicenseBit extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'activeFlag' => 'boolean',
    ];
}
