<?php

namespace Spinen\ConnectWise\Models\v2018_5\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GroupReference Version v2018_5
 *
 * Model for GroupReference
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Marketing\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class GroupReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Marketing\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
