<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedInvoice Version v2018_5
 *
 * Model for UnpostedInvoice
 *
 * @property integer $id
 * @property integer $billingLogId
 * @property integer $locationId
 * @property integer $departmentId
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\CompanyReference $company
 * @property string $accountNumber
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\SiteReference $shipToSite
 * @property string $invoiceNumber
 * @property Carbon\Carbon $invoiceDate
 * @property string $invoiceType
 * @property string $description
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\BillingTermsReference $billingTerms
 * @property string $dueDays
 * @property Carbon\Carbon $dueDate
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\CurrencyReference $currency
 * @property float $subTotal
 * @property float $total
 * @property boolean $invoiceTaxableFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\TaxCodeReference $taxCode
 * @property boolean $avalaraTaxFlag
 * @property boolean $itemTaxableFlag
 * @property float $salesTaxAmount
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
 * @property string $createdBy
 * @property Carbon\Carbon $dateClosed
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 */
class UnpostedInvoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'billingLogId' => 'integer',
        'locationId' => 'integer',
        'departmentId' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Finance\CompanyReference',
        'accountNumber' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_5\Finance\CompanyReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2018_5\Finance\SiteReference',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2018_5\Finance\CompanyReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2018_5\Finance\SiteReference',
        'invoiceNumber' => 'string',
        'invoiceDate' => 'Carbon\Carbon',
        'invoiceType' => 'string',
        'description' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_5\Finance\BillingTermsReference',
        'dueDays' => 'string',
        'dueDate' => 'Carbon\Carbon',
        'currency' => 'Spinen\ConnectWise\Models\v2018_5\Finance\CurrencyReference',
        'subTotal' => 'float',
        'total' => 'float',
        'invoiceTaxableFlag' => 'boolean',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_5\Finance\TaxCodeReference',
        'avalaraTaxFlag' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'salesTaxAmount' => 'float',
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
        'createdBy' => 'string',
        'dateClosed' => 'Carbon\Carbon',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}
