<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedProcurement Version v2019_3
 *
 * Model for UnpostedProcurement
 *
 * @property Carbon\Carbon $dateClosed
 * @property Carbon\Carbon $purchaseDate
 * @property Carbon\Carbon $vendorInvoiceDate
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference $customer
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference $vendor
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\PurchaseOrderReference $purchaseOrder
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference $taxCode
 * @property boolean $avalaraTaxFlag
 * @property boolean $cityTaxFlag
 * @property boolean $compositeTaxFlag
 * @property boolean $countryTaxFlag
 * @property boolean $countyTaxFlag
 * @property boolean $itemTaxableFlag
 * @property boolean $levelSixTaxFlag
 * @property boolean $purchaseOrderTaxableFlag
 * @property boolean $stateTaxFlag
 * @property boolean $taxFreightFlag
 * @property float $cityTaxAmount
 * @property float $compositeTaxAmount
 * @property float $countryTaxAmount
 * @property float $countyTaxAmount
 * @property float $freightCost
 * @property float $freightTaxTotal
 * @property float $levelSixTaxAmount
 * @property float $stateTaxAmount
 * @property float $taxTotal
 * @property float $total
 * @property integer $departmentId
 * @property integer $id
 * @property integer $locationId
 * @property string $cityTaxXref
 * @property string $compositeTaxXref
 * @property string $countryTaxXref
 * @property string $countyTaxXref
 * @property string $description
 * @property string $levelSixTaxXref
 * @property string $procurementType
 * @property string $stateTaxXref
 * @property string $trackingNumber
 * @property string $vendorAccountNumber
 * @property string $vendorInvoiceNumber
 */
class UnpostedProcurement extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'avalaraTaxFlag' => 'boolean',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_3\Finance\BillingTermsReference',
        'cityTaxAmount' => 'float',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'compositeTaxAmount' => 'float',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'countryTaxAmount' => 'float',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countyTaxAmount' => 'float',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference',
        'customer' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference',
        'dateClosed' => 'Carbon\Carbon',
        'departmentId' => 'integer',
        'description' => 'string',
        'freightCost' => 'float',
        'freightTaxTotal' => 'float',
        'id' => 'integer',
        'itemTaxableFlag' => 'boolean',
        'levelSixTaxAmount' => 'float',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'locationId' => 'integer',
        'procurementType' => 'string',
        'purchaseDate' => 'Carbon\Carbon',
        'purchaseOrder' => 'Spinen\ConnectWise\Models\v2019_3\Finance\PurchaseOrderReference',
        'purchaseOrderTaxableFlag' => 'boolean',
        'stateTaxAmount' => 'float',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference',
        'taxFreightFlag' => 'boolean',
        'taxTotal' => 'float',
        'total' => 'float',
        'trackingNumber' => 'string',
        'vendor' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference',
        'vendorAccountNumber' => 'string',
        'vendorInvoiceDate' => 'Carbon\Carbon',
        'vendorInvoiceNumber' => 'string',
    ];
}
