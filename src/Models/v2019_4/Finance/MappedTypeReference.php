<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MappedTypeReference Version v2019_4
 *
 * Model for MappedTypeReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class MappedTypeReference extends Model
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
