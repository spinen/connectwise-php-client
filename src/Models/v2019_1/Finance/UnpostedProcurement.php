<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedProcurement Version v2019_1
 * 
 * Model for UnpostedProcurement
 *
 * @property integer $id
 * @property string $description
 * @property integer $locationId
 * @property integer $departmentId
 * @property string $procurementType
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\PurchaseOrderReference $purchaseOrder
 * @property string $purchaseDate
 * @property string $trackingNumber
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CurrencyReference $currency
 * @property number $total
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\TaxCodeReference $taxCode
 * @property boolean $avalaraTaxFlag
 * @property boolean $itemTaxableFlag
 * @property boolean $purchaseOrderTaxableFlag
 * @property boolean $stateTaxFlag
 * @property string $stateTaxXref
 * @property number $stateTaxAmount
 * @property boolean $countyTaxFlag
 * @property string $countyTaxXref
 * @property number $countyTaxAmount
 * @property boolean $cityTaxFlag
 * @property string $cityTaxXref
 * @property number $cityTaxAmount
 * @property boolean $countryTaxFlag
 * @property string $countryTaxXref
 * @property number $countryTaxAmount
 * @property boolean $compositeTaxFlag
 * @property string $compositeTaxXref
 * @property number $compositeTaxAmount
 * @property boolean $levelSixTaxFlag
 * @property string $levelSixTaxXref
 * @property number $levelSixTaxAmount
 * @property number $taxTotal
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference $customer
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference $vendor
 * @property string $vendorAccountNumber
 * @property string $vendorInvoiceNumber
 * @property string $vendorInvoiceDate
 * @property boolean $taxFreightFlag
 * @property number $freightTaxTotal
 * @property number $freightCost
 * @property string $dateClosed
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
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
        'purchaseOrder' => 'Spinen\ConnectWise\Models\v2019_1\Finance\PurchaseOrderReference',
        'purchaseDate' => 'string',
        'trackingNumber' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_1\Finance\BillingTermsReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CurrencyReference',
        'total' => 'number',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_1\Finance\TaxCodeReference',
        'avalaraTaxFlag' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'purchaseOrderTaxableFlag' => 'boolean',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'stateTaxAmount' => 'number',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'countyTaxAmount' => 'number',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'cityTaxAmount' => 'number',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countryTaxAmount' => 'number',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'compositeTaxAmount' => 'number',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'levelSixTaxAmount' => 'number',
        'taxTotal' => 'number',
        'customer' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference',
        'vendor' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference',
        'vendorAccountNumber' => 'string',
        'vendorInvoiceNumber' => 'string',
        'vendorInvoiceDate' => 'string',
        'taxFreightFlag' => 'boolean',
        'freightTaxTotal' => 'number',
        'freightCost' => 'number',
        'dateClosed' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}
