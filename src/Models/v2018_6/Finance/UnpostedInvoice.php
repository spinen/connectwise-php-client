<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedInvoice Version v2018_6
 *
 * Model for UnpostedInvoice
 *
 * @property Carbon\Carbon $dateClosed
 * @property Carbon\Carbon $dueDate
 * @property Carbon\Carbon $invoiceDate
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference $taxCode
 * @property boolean $avalaraTaxFlag
 * @property boolean $cityTaxFlag
 * @property boolean $compositeTaxFlag
 * @property boolean $countryTaxFlag
 * @property boolean $countyTaxFlag
 * @property boolean $invoiceTaxableFlag
 * @property boolean $itemTaxableFlag
 * @property boolean $levelSixTaxFlag
 * @property boolean $stateTaxFlag
 * @property float $cityTaxAmount
 * @property float $compositeTaxAmount
 * @property float $countryTaxAmount
 * @property float $countyTaxAmount
 * @property float $levelSixTaxAmount
 * @property float $salesTaxAmount
 * @property float $stateTaxAmount
 * @property float $subTotal
 * @property float $total
 * @property integer $billingLogId
 * @property integer $departmentId
 * @property integer $id
 * @property integer $locationId
 * @property string $accountNumber
 * @property string $cityTaxXref
 * @property string $compositeTaxXref
 * @property string $countryTaxXref
 * @property string $countyTaxXref
 * @property string $createdBy
 * @property string $description
 * @property string $dueDays
 * @property string $invoiceNumber
 * @property string $invoiceType
 * @property string $levelSixTaxXref
 * @property string $stateTaxXref
 */
class UnpostedInvoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'accountNumber' => 'string',
        'avalaraTaxFlag' => 'boolean',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference',
        'billingLogId' => 'integer',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_6\Finance\BillingTermsReference',
        'cityTaxAmount' => 'float',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'compositeTaxAmount' => 'float',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'countryTaxAmount' => 'float',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countyTaxAmount' => 'float',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'createdBy' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference',
        'dateClosed' => 'Carbon\Carbon',
        'departmentId' => 'integer',
        'description' => 'string',
        'dueDate' => 'Carbon\Carbon',
        'dueDays' => 'string',
        'id' => 'integer',
        'invoiceDate' => 'Carbon\Carbon',
        'invoiceNumber' => 'string',
        'invoiceTaxableFlag' => 'boolean',
        'invoiceType' => 'string',
        'itemTaxableFlag' => 'boolean',
        'levelSixTaxAmount' => 'float',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'locationId' => 'integer',
        'salesTaxAmount' => 'float',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference',
        'stateTaxAmount' => 'float',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'subTotal' => 'float',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference',
        'total' => 'float',
    ];
}
