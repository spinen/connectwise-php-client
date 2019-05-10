<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProcurementSetting Version v2019_1
 *
 * Model for ProcurementSetting
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 * @property boolean $autoApprovePurchaseOrderFlag
 * @property boolean $autoClosePurchaseOrderFlag
 * @property boolean $autoClosePurchaseOrderItemFlag
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
        'autoApprovePurchaseOrderFlag' => 'boolean',
        'autoClosePurchaseOrderFlag' => 'boolean',
        'autoClosePurchaseOrderItemFlag' => 'boolean',
        'costingMethod' => 'string',
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
        'useVendorTaxCodeFlag' => 'boolean',
    ];
}
