<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProcurementSetting Version v2019_2
 *
 * Model for ProcurementSetting
 *
 * @property Metadata $_info
 * @property bool $autoApprovePurchaseOrderFlag
 * @property bool $autoClosePurchaseOrderFlag
 * @property bool $autoClosePurchaseOrderItemFlag
 * @property bool $disableAutoPickFlag
 * @property bool $disableCostUpdatesFlag
 * @property bool $disableNegativeInventoryFlag
 * @property bool $taxFreightFlag
 * @property bool $taxPurchaseOrderFlag
 * @property bool $useVendorTaxCodeFlag
 * @property int $id
 * @property int $numDecimalPlaces
 * @property int $startingPurchaseOrderNum
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
        'useVendorTaxCodeFlag' => 'boolean',
    ];
}
