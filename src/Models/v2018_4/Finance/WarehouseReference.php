<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WarehouseReference Version v2018_4
 *
 * Model for WarehouseReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class WarehouseReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
