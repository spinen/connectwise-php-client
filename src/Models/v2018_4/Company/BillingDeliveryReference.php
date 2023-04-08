<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingDeliveryReference Version v2018_4
 *
 * Model for BillingDeliveryReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class BillingDeliveryReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
