<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LicenseBit Version v2019_2
 *
 * Model for LicenseBit
 *
 * @property boolean $activeFlag
 * @property string $name
 */
class LicenseBit extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'activeFlag' => 'boolean',
        'name' => 'string',
    ];
}
