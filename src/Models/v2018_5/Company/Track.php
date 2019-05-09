<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Track Version v2018_5
 * 
 * Model for Track
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property array $notifyActionIds
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
 */
class Track extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'notifyActionIds' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
    ];
}
