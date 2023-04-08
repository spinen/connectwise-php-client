<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Company Version v2018_4
 *
 * Model for Company
 *
 * @property BillingDeliveryReference $invoiceDeliveryMethod
 * @property BillingTermsReference $billingTerms
 * @property Carbon $dateAcquired
 * @property Carbon $dateDeleted
 * @property CompanyReference $billToCompany
 * @property CompanyReference $parentCompany
 * @property CompanyStatusReference $status
 * @property CompanyTypeReference $type
 * @property ContactReference $billingContact
 * @property ContactReference $defaultContact
 * @property CountryReference $country
 * @property CurrencyReference $currency
 * @property EntityTypeReference $companyEntityType
 * @property Guid $mobileGuid
 * @property InvoiceTemplateReference $invoiceTemplate
 * @property MemberReference $territoryManager
 * @property Metadata $_info
 * @property OwnershipTypeReference $ownershipType
 * @property PricingScheduleReference $pricingSchedule
 * @property SicCodeReference $sicCode
 * @property SiteReference $billingSite
 * @property TaxCodeReference $taxCode
 * @property TimeZoneSetupReference $timeZone
 * @property array $customFields
 * @property bool $deletedFlag
 * @property bool $leadFlag
 * @property bool $unsubscribeFlag
 * @property float $annualRevenue
 * @property int $calendarId
 * @property int $id
 * @property int $marketId
 * @property int $numberOfEmployees
 * @property int $territoryId
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
        '_info' => Metadata::class,
        'accountNumber' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'annualRevenue' => 'float',
        'billToCompany' => CompanyReference::class,
        'billingContact' => ContactReference::class,
        'billingSite' => SiteReference::class,
        'billingTerms' => BillingTermsReference::class,
        'calendarId' => 'integer',
        'city' => 'string',
        'companyEntityType' => EntityTypeReference::class,
        'country' => CountryReference::class,
        'currency' => CurrencyReference::class,
        'customFields' => 'array',
        'dateAcquired' => Carbon::class,
        'dateDeleted' => Carbon::class,
        'defaultContact' => ContactReference::class,
        'deletedBy' => 'string',
        'deletedFlag' => 'boolean',
        'facebookUrl' => 'string',
        'faxNumber' => 'string',
        'id' => 'integer',
        'identifier' => 'string',
        'invoiceCCEmailAddress' => 'string',
        'invoiceDeliveryMethod' => BillingDeliveryReference::class,
        'invoiceTemplate' => InvoiceTemplateReference::class,
        'invoiceToEmailAddress' => 'string',
        'leadFlag' => 'boolean',
        'leadSource' => 'string',
        'linkedInUrl' => 'string',
        'marketId' => 'integer',
        'mobileGuid' => Guid::class,
        'name' => 'string',
        'numberOfEmployees' => 'integer',
        'ownershipType' => OwnershipTypeReference::class,
        'parentCompany' => CompanyReference::class,
        'phoneNumber' => 'string',
        'pricingSchedule' => PricingScheduleReference::class,
        'sicCode' => SicCodeReference::class,
        'state' => 'string',
        'status' => CompanyStatusReference::class,
        'taxCode' => TaxCodeReference::class,
        'taxIdentifier' => 'string',
        'territoryId' => 'integer',
        'territoryManager' => MemberReference::class,
        'timeZone' => TimeZoneSetupReference::class,
        'twitterUrl' => 'string',
        'type' => CompanyTypeReference::class,
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
