<?php

namespace Spinen\ConnectWise\Models\v2019_5\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingDeliveryReference Version v2019_5
 *
 * Model for BillingDeliveryReference
 *
 * @property Metadata $_info
 * @property integer $id
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
        'name' => 'string'
    ];
}
