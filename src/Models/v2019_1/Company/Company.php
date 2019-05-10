<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Company Version v2019_1
 *
 * Model for Company
 *
 * @property Carbon\Carbon $dateAcquired
 * @property Carbon\Carbon $dateDeleted
 * @property Spinen\ConnectWise\Models\v2019_1\Company\BillingDeliveryReference $invoiceDeliveryMethod
 * @property Spinen\ConnectWise\Models\v2019_1\Company\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CalendarReference $calendar
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference $parentCompany
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CompanyStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ContactReference $billingContact
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ContactReference $defaultContact
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_1\Company\EntityTypeReference $companyEntityType
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_1\Company\InvoiceTemplateReference $invoiceTemplate
 * @property Spinen\ConnectWise\Models\v2019_1\Company\MarketDescriptionReference $market
 * @property Spinen\ConnectWise\Models\v2019_1\Company\MemberReference $territoryManager
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Company\OwnershipTypeReference $ownershipType
 * @property Spinen\ConnectWise\Models\v2019_1\Company\PricingScheduleReference $pricingSchedule
 * @property Spinen\ConnectWise\Models\v2019_1\Company\SicCodeReference $sicCode
 * @property Spinen\ConnectWise\Models\v2019_1\Company\SiteReference $billingSite
 * @property Spinen\ConnectWise\Models\v2019_1\Company\SystemLocationReference $territory
 * @property Spinen\ConnectWise\Models\v2019_1\Company\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2019_1\Company\TimeZoneSetupReference $timeZoneSetup
 * @property array $customFields
 * @property array $typeIds
 * @property boolean $deletedFlag
 * @property boolean $leadFlag
 * @property boolean $unsubscribeFlag
 * @property float $annualRevenue
 * @property integer $id
 * @property integer $numberOfEmployees
 * @property string $accountNumber
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $deletedBy
 * @property string $facebookUrl
 * @property string $faxNumber
 * @property string $identifier
 * @property string $invoiceCCEmailAddress
 * @property string $invoiceToEmailAddress
 * @property string $leadSource
 * @property string $linkedInUrl
 * @property string $name
 * @property string $phoneNumber
 * @property string $state
 * @property string $taxIdentifier
 * @property string $twitterUrl
 * @property string $userDefinedField1
 * @property string $userDefinedField10
 * @property string $userDefinedField2
 * @property string $userDefinedField3
 * @property string $userDefinedField4
 * @property string $userDefinedField5
 * @property string $userDefinedField6
 * @property string $userDefinedField7
 * @property string $userDefinedField8
 * @property string $userDefinedField9
 * @property string $vendorIdentifier
 * @property string $website
 * @property string $zip
 */
class Company extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
        'accountNumber' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'annualRevenue' => 'float',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference',
        'billingContact' => 'Spinen\ConnectWise\Models\v2019_1\Company\ContactReference',
        'billingSite' => 'Spinen\ConnectWise\Models\v2019_1\Company\SiteReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_1\Company\BillingTermsReference',
        'calendar' => 'Spinen\ConnectWise\Models\v2019_1\Company\CalendarReference',
        'city' => 'string',
        'companyEntityType' => 'Spinen\ConnectWise\Models\v2019_1\Company\EntityTypeReference',
        'country' => 'Spinen\ConnectWise\Models\v2019_1\Company\CountryReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Company\CurrencyReference',
        'customFields' => 'array',
        'dateAcquired' => 'Carbon\Carbon',
        'dateDeleted' => 'Carbon\Carbon',
        'defaultContact' => 'Spinen\ConnectWise\Models\v2019_1\Company\ContactReference',
        'deletedBy' => 'string',
        'deletedFlag' => 'boolean',
        'facebookUrl' => 'string',
        'faxNumber' => 'string',
        'id' => 'integer',
        'identifier' => 'string',
        'invoiceCCEmailAddress' => 'string',
        'invoiceDeliveryMethod' => 'Spinen\ConnectWise\Models\v2019_1\Company\BillingDeliveryReference',
        'invoiceTemplate' => 'Spinen\ConnectWise\Models\v2019_1\Company\InvoiceTemplateReference',
        'invoiceToEmailAddress' => 'string',
        'leadFlag' => 'boolean',
        'leadSource' => 'string',
        'linkedInUrl' => 'string',
        'market' => 'Spinen\ConnectWise\Models\v2019_1\Company\MarketDescriptionReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_1\Company\Guid',
        'name' => 'string',
        'numberOfEmployees' => 'integer',
        'ownershipType' => 'Spinen\ConnectWise\Models\v2019_1\Company\OwnershipTypeReference',
        'parentCompany' => 'Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference',
        'phoneNumber' => 'string',
        'pricingSchedule' => 'Spinen\ConnectWise\Models\v2019_1\Company\PricingScheduleReference',
        'sicCode' => 'Spinen\ConnectWise\Models\v2019_1\Company\SicCodeReference',
        'state' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Company\CompanyStatusReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_1\Company\TaxCodeReference',
        'taxIdentifier' => 'string',
        'territory' => 'Spinen\ConnectWise\Models\v2019_1\Company\SystemLocationReference',
        'territoryManager' => 'Spinen\ConnectWise\Models\v2019_1\Company\MemberReference',
        'timeZoneSetup' => 'Spinen\ConnectWise\Models\v2019_1\Company\TimeZoneSetupReference',
        'twitterUrl' => 'string',
        'typeIds' => 'array',
        'unsubscribeFlag' => 'boolean',
        'userDefinedField1' => 'string',
        'userDefinedField10' => 'string',
        'userDefinedField2' => 'string',
        'userDefinedField3' => 'string',
        'userDefinedField4' => 'string',
        'userDefinedField5' => 'string',
        'userDefinedField6' => 'string',
        'userDefinedField7' => 'string',
        'userDefinedField8' => 'string',
        'userDefinedField9' => 'string',
        'vendorIdentifier' => 'string',
        'website' => 'string',
        'zip' => 'string',
    ];
}
