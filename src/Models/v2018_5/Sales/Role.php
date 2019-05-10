<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Role Version v2018_5
 *
 * Model for Role
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class Role extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
