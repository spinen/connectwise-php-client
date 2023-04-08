<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OnHandSerialNumberReference Version v2019_3
 *
 * Model for OnHandSerialNumberReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $serialNumber
 */
class OnHandSerialNumberReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'serialNumber' => 'string',
    ];
}
