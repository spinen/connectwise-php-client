<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderLineItemReference Version v2019_3
 *
 * Model for PurchaseOrderLineItemReference
 *
 * @property integer $id
 * @property string $identifier
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 */
class PurchaseOrderLineItemReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
    ];
}
