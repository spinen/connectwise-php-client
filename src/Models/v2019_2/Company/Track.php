<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Track Version v2019_2
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
        'notifyActionIds' => 'array',
    ];
}
