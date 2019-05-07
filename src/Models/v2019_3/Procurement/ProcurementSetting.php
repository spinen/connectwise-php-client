<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProcurementSetting
 *
 * @property integer $id
 * @property integer $startingPurchaseOrderNum
 * @property string $purchaseOrderPrefix
 * @property string $purchaseOrderSuffix
 * @property string $prefixSuffixType
 * @property boolean $disableCostUpdatesFlag
 * @property boolean $disableNegativeInventoryFlag
 * @property string $costingMethod
 * @property boolean $autoClosePurchaseOrderFlag
 * @property boolean $autoClosePurchaseOrderItemFlag
 * @property boolean $autoApprovePurchaseOrderFlag
 * @property boolean $taxPurchaseOrderFlag
 * @property boolean $taxFreightFlag
 * @property boolean $useVendorTaxCodeFlag
 * @property integer $numDecimalPlaces
 * @property boolean $disableAutoPickFlag
 */
class ProcurementSetting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'startingPurchaseOrderNum' => 'integer',
        'purchaseOrderPrefix' => 'string',
        'purchaseOrderSuffix' => 'string',
        'prefixSuffixType' => 'string',
        'disableCostUpdatesFlag' => 'boolean',
        'disableNegativeInventoryFlag' => 'boolean',
        'costingMethod' => 'string',
        'autoClosePurchaseOrderFlag' => 'boolean',
        'autoClosePurchaseOrderItemFlag' => 'boolean',
        'autoApprovePurchaseOrderFlag' => 'boolean',
        'taxPurchaseOrderFlag' => 'boolean',
        'taxFreightFlag' => 'boolean',
        'useVendorTaxCodeFlag' => 'boolean',
        'numDecimalPlaces' => 'integer',
        'disableAutoPickFlag' => 'boolean',
    ];
}
