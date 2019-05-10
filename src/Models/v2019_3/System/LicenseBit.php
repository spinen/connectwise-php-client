<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LicenseBit Version v2019_3
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
