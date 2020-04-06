<?php

namespace Spinen\ConnectWise\Models\v2019_5\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PriorityReference Version v2019_5
 *
 * Model for PriorityReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property integer $sort
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
        'sort' => 'integer'
    ];
}
