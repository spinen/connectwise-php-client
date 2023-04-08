<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Manufacturer Version v2018_4
 *
 * Model for Manufacturer
 *
 * @property Metadata $_info
 * @property bool $inactiveFlag
 * @property int $id
 * @property string $name
 */
class Manufacturer extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
    ];
}
