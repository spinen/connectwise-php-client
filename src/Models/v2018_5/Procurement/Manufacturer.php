<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Manufacturer Version v2018_5
 *
 * Model for Manufacturer
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata $_info
 */
class Manufacturer extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata',
    ];
}
