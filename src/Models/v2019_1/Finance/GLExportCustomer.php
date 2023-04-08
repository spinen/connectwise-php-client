<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportCustomer Version v2019_1
 *
 * Model for GLExportCustomer
 *
 * @property BillingTermsReference $billingTerms
 * @property CompanyReference $company
 * @property CompanyTypeReference $companyType
 * @property ContactReference $contact
 * @property CurrencyReference $currency
 * @property SiteReference $site
 * @property TaxCodeReference $taxCode
 * @property array $taxLevels
 * @property bool $taxable
 * @property float $cityTaxRate
 * @property float $compositeTaxRate
 * @property float $countryTaxRate
 * @property float $countyTaxRate
 * @property float $stateTaxRate
 * @property float $taxGroupRate
 * @property int $dueDays
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
        'billingTerms' => BillingTermsReference::class,
        'billingTermsXref' => 'string',
        'cityTaxAgencyXref' => 'string',
        'cityTaxRate' => 'float',
        'cityTaxXref' => 'string',
        'company' => CompanyReference::class,
        'companyType' => CompanyTypeReference::class,
        'compositeTaxAgencyXref' => 'string',
        'compositeTaxRate' => 'float',
        'compositeTaxXref' => 'string',
        'contact' => ContactReference::class,
        'countryTaxAgencyXref' => 'string',
        'countryTaxRate' => 'float',
        'countryTaxXref' => 'string',
        'countyTaxAgencyXref' => 'string',
        'countyTaxRate' => 'float',
        'countyTaxXref' => 'string',
        'currency' => CurrencyReference::class,
        'dueDays' => 'integer',
        'site' => SiteReference::class,
        'stateTaxAgencyXref' => 'string',
        'stateTaxRate' => 'float',
        'stateTaxXref' => 'string',
        'taxAgencyXref' => 'string',
        'taxCode' => TaxCodeReference::class,
        'taxGroupRate' => 'float',
        'taxLevels' => 'array',
        'taxable' => 'boolean',
    ];
}
