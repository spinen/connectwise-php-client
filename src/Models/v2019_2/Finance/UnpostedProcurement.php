<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedProcurement Version v2019_2
 *
 * Model for UnpostedProcurement
 *
 * @property integer $id
 * @property string $description
 * @property integer $locationId
 * @property integer $departmentId
 * @property string $procurementType
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\PurchaseOrderReference $purchaseOrder
 * @property Carbon\Carbon $purchaseDate
 * @property string $trackingNumber
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference $currency
 * @property float $total
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference $taxCode
 * @property boolean $avalaraTaxFlag
 * @property boolean $itemTaxableFlag
 * @property boolean $purchaseOrderTaxableFlag
 * @property boolean $stateTaxFlag
 * @property string $stateTaxXref
 * @property float $stateTaxAmount
 * @property boolean $countyTaxFlag
 * @property string $countyTaxXref
 * @property float $countyTaxAmount
 * @property boolean $cityTaxFlag
 * @property string $cityTaxXref
 * @property float $cityTaxAmount
 * @property boolean $countryTaxFlag
 * @property string $countryTaxXref
 * @property float $countryTaxAmount
 * @property boolean $compositeTaxFlag
 * @property string $compositeTaxXref
 * @property float $compositeTaxAmount
 * @property boolean $levelSixTaxFlag
 * @property string $levelSixTaxXref
 * @property float $levelSixTaxAmount
 * @property float $taxTotal
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $customer
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $vendor
 * @property string $vendorAccountNumber
 * @property string $vendorInvoiceNumber
 * @property Carbon\Carbon $vendorInvoiceDate
 * @property boolean $taxFreightFlag
 * @property float $freightTaxTotal
 * @property float $freightCost
 * @property Carbon\Carbon $dateClosed
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 */
class UnpostedProcurement extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'locationId' => 'integer',
        'departmentId' => 'integer',
        'procurementType' => 'string',
        'purchaseOrder' => 'Spinen\ConnectWise\Models\v2019_2\Finance\PurchaseOrderReference',
        'purchaseDate' => 'Carbon\Carbon',
        'trackingNumber' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_2\Finance\BillingTermsReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference',
        'total' => 'float',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference',
        'avalaraTaxFlag' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'purchaseOrderTaxableFlag' => 'boolean',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'stateTaxAmount' => 'float',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'countyTaxAmount' => 'float',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'cityTaxAmount' => 'float',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countryTaxAmount' => 'float',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'compositeTaxAmount' => 'float',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'levelSixTaxAmount' => 'float',
        'taxTotal' => 'float',
        'customer' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'vendor' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'vendorAccountNumber' => 'string',
        'vendorInvoiceNumber' => 'string',
        'vendorInvoiceDate' => 'Carbon\Carbon',
        'taxFreightFlag' => 'boolean',
        'freightTaxTotal' => 'float',
        'freightCost' => 'float',
        'dateClosed' => 'Carbon\Carbon',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
    ];
}
