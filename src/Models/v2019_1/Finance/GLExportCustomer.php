<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportCustomer Version v2019_1
 * 
 * Model for GLExportCustomer
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CompanyTypeReference $companyType
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\SiteReference $site
 * @property string $accountNumber
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\BillingTermsReference $billingTerms
 * @property string $billingTermsXref
 * @property integer $dueDays
 * @property boolean $taxable
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CurrencyReference $currency
 * @property string $stateTaxXref
 * @property string $countyTaxXref
 * @property string $cityTaxXref
 * @property string $countryTaxXref
 * @property string $compositeTaxXref
 * @property number $stateTaxRate
 * @property number $countyTaxRate
 * @property number $cityTaxRate
 * @property number $countryTaxRate
 * @property number $compositeTaxRate
 * @property number $taxGroupRate
 * @property string $taxAgencyXref
 * @property string $stateTaxAgencyXref
 * @property string $countyTaxAgencyXref
 * @property string $cityTaxAgencyXref
 * @property string $countryTaxAgencyXref
 * @property string $compositeTaxAgencyXref
 * @property array $taxLevels
 */
class GLExportCustomer extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference',
        'companyType' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CompanyTypeReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Finance\ContactReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_1\Finance\SiteReference',
        'accountNumber' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_1\Finance\BillingTermsReference',
        'billingTermsXref' => 'string',
        'dueDays' => 'integer',
        'taxable' => 'boolean',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_1\Finance\TaxCodeReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CurrencyReference',
        'stateTaxXref' => 'string',
        'countyTaxXref' => 'string',
        'cityTaxXref' => 'string',
        'countryTaxXref' => 'string',
        'compositeTaxXref' => 'string',
        'stateTaxRate' => 'number',
        'countyTaxRate' => 'number',
        'cityTaxRate' => 'number',
        'countryTaxRate' => 'number',
        'compositeTaxRate' => 'number',
        'taxGroupRate' => 'number',
        'taxAgencyXref' => 'string',
        'stateTaxAgencyXref' => 'string',
        'countyTaxAgencyXref' => 'string',
        'cityTaxAgencyXref' => 'string',
        'countryTaxAgencyXref' => 'string',
        'compositeTaxAgencyXref' => 'string',
        'taxLevels' => 'array',
    ];
}
