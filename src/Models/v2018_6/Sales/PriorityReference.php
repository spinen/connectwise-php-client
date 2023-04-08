<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PriorityReference Version v2018_6
 *
 * Model for PriorityReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property int $sort
 * @property string $name
 */
class PriorityReference extends Model
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
        'sort' => 'integer',
    ];
}
