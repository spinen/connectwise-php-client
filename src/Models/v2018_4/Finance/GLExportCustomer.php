<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportCustomer Version v2018_4
 *
 * Model for GLExportCustomer
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyTypeReference $companyType
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference $taxCode
 * @property boolean $taxable
 * @property float $cityTaxRate
 * @property float $compositeTaxRate
 * @property float $countryTaxRate
 * @property float $countyTaxRate
 * @property float $stateTaxRate
 * @property float $taxGroupRate
 * @property integer $dueDays
 * @property string $accountNumber
 * @property string $billingTermsXref
 * @property string $cityTaxAgencyXref
 * @property string $cityTaxXref
 * @property string $compositeTaxAgencyXref
 * @property string $compositeTaxXref
 * @property string $countryTaxAgencyXref
 * @property string $countryTaxXref
 * @property string $countyTaxAgencyXref
 * @property string $countyTaxXref
 * @property string $stateTaxAgencyXref
 * @property string $stateTaxXref
 * @property string $taxAgencyXref
 */
class GLExportCustomer extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'accountNumber' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_4\Finance\BillingTermsReference',
        'billingTermsXref' => 'string',
        'cityTaxAgencyXref' => 'string',
        'cityTaxRate' => 'float',
        'cityTaxXref' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference',
        'companyType' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyTypeReference',
        'compositeTaxAgencyXref' => 'string',
        'compositeTaxRate' => 'float',
        'compositeTaxXref' => 'string',
        'contact' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ContactReference',
        'countryTaxAgencyXref' => 'string',
        'countryTaxRate' => 'float',
        'countryTaxXref' => 'string',
        'countyTaxAgencyXref' => 'string',
        'countyTaxRate' => 'float',
        'countyTaxXref' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference',
        'dueDays' => 'integer',
        'site' => 'Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference',
        'stateTaxAgencyXref' => 'string',
        'stateTaxRate' => 'float',
        'stateTaxXref' => 'string',
        'taxAgencyXref' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference',
        'taxGroupRate' => 'float',
        'taxable' => 'boolean',
    ];
}
