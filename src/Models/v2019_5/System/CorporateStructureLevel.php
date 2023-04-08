<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CorporateStructureLevel Version v2019_5
 *
 * Model for CorporateStructureLevel
 *
 * @property int $id
 * @property string $name
 */
class CorporateStructureLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
    ];
}
