<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderLineItemReference Version v2019_5
 *
 * Model for PurchaseOrderLineItemReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $identifier
 */
class PurchaseOrderLineItemReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string'
    ];
}
