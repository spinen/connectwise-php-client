<?php

namespace Spinen\ConnectWise\Models\v2019_4\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProcurementSetting Version v2019_4
 *
 * Model for ProcurementSetting
 *
 * @property Metadata $_info
 * @property boolean $autoApprovePurchaseOrderFlag
 * @property boolean $autoClosePurchaseOrderFlag
 * @property boolean $autoClosePurchaseOrderItemFlag
 * @property boolean $disableAutoPickFlag
 * @property boolean $disableCostUpdatesFlag
 * @property boolean $disableNegativeInventoryFlag
 * @property boolean $taxFreightFlag
 * @property boolean $taxPurchaseOrderFlag
 * @property boolean $useVendorTaxCodeFlag
 * @property integer $id
 * @property integer $numDecimalPlaces
 * @property integer $startingPurchaseOrderNum
 * @property string $costingMethod
 * @property string $prefixSuffixType
 * @property string $purchaseOrderPrefix
 * @property string $purchaseOrderSuffix
 */
class ProcurementSetting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'autoApprovePurchaseOrderFlag' => 'boolean',
        'autoClosePurchaseOrderFlag' => 'boolean',
        'autoClosePurchaseOrderItemFlag' => 'boolean',
        'costingMethod' => 'string',
        'disableAutoPickFlag' => 'boolean',
        'disableCostUpdatesFlag' => 'boolean',
        'disableNegativeInventoryFlag' => 'boolean',
        'id' => 'integer',
        'numDecimalPlaces' => 'integer',
        'prefixSuffixType' => 'string',
        'purchaseOrderPrefix' => 'string',
        'purchaseOrderSuffix' => 'string',
        'startingPurchaseOrderNum' => 'integer',
        'taxFreightFlag' => 'boolean',
        'taxPurchaseOrderFlag' => 'boolean',
        'useVendorTaxCodeFlag' => 'boolean'
    ];
}
