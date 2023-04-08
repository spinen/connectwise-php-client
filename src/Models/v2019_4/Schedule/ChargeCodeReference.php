<?php

namespace Spinen\ConnectWise\Models\v2019_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeCodeReference Version v2019_4
 *
 * Model for ChargeCodeReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class ChargeCodeReference extends Model
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
