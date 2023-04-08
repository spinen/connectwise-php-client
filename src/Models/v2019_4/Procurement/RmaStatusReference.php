<?php

namespace Spinen\ConnectWise\Models\v2019_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatusReference Version v2019_4
 *
 * Model for RmaStatusReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class RmaStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
