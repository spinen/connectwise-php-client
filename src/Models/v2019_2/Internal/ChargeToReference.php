<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeToReference Version v2019_2
 *
 * Model for ChargeToReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 * @property string $type
 */
class ChargeToReference extends Model
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
        'type' => 'string',
    ];
}
