<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ShipmentMethod Version v2018_5
 *
 * Model for ShipmentMethod
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $name
 * @property string $shippingType
 * @property string $trackingUrl
 */
class ShipmentMethod extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'shippingType' => 'string',
        'trackingUrl' => 'string',
    ];
}
