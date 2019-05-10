<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ShipmentMethod Version v2018_5
 *
 * Model for ShipmentMethod
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property string $trackingUrl
 * @property string $shippingType
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata $_info
 */
class ShipmentMethod extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'trackingUrl' => 'string',
        'shippingType' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata',
    ];
}
