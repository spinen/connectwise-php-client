<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ShipmentMethodReference Version v2019_1
 *
 * Model for ShipmentMethodReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ShipmentMethodReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
