<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Track Version v2018_5
 *
 * Model for Track
 *
 * @property Metadata $_info
 * @property array $notifyActionIds
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $name
 */
class Track extends Model
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
        'notifyActionIds' => 'array'
    ];
}
