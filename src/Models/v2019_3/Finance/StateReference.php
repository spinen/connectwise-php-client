<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StateReference Version v2019_3
 *
 * Model for StateReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class StateReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
