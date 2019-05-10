<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PriorityReference Version v2019_3
 *
 * Model for PriorityReference
 *
 * @property integer $id
 * @property string $name
 * @property integer $sort
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 */
class PriorityReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'sort' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
    ];
}
