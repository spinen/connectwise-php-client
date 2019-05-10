<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Company Version v2018_5
 *
 * Model for Company
 *
 * @property Carbon\Carbon $dateAcquired
 * @property Carbon\Carbon $dateDeleted
 * @property Spinen\ConnectWise\Models\v2018_5\Company\BillingDeliveryReference $invoiceDeliveryMethod
 * @property Spinen\ConnectWise\Models\v2018_5\Company\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference $parentCompany
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CompanyStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CompanyTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ContactReference $billingContact
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ContactReference $defaultContact
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_5\Company\EntityTypeReference $companyEntityType
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_5\Company\InvoiceTemplateReference $invoiceTemplate
 * @property Spinen\ConnectWise\Models\v2018_5\Company\MemberReference $territoryManager
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Company\OwnershipTypeReference $ownershipType
 * @property Spinen\ConnectWise\Models\v2018_5\Company\PricingScheduleReference $pricingSchedule
 * @property Spinen\ConnectWise\Models\v2018_5\Company\SicCodeReference $sicCode
 * @property Spinen\ConnectWise\Models\v2018_5\Company\SiteReference $billingSite
 * @property Spinen\ConnectWise\Models\v2018_5\Company\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2018_5\Company\TimeZoneSetupReference $timeZone
 * @property array $customFields
 * @property boolean $deletedFlag
 * @property boolean $leadFlag
 * @property boolean $unsubscribeFlag
 * @property float $annualRevenue
 * @property integer $calendarId
 * @property integer $id
 * @property integer $marketId
 * @property integer $numberOfEmployees
 * @property integer $territoryId
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
        'accountNumber' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'annualRevenue' => 'float',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference',
        'billingContact' => 'Spinen\ConnectWise\Models\v2018_5\Company\ContactReference',
        'billingSite' => 'Spinen\ConnectWise\Models\v2018_5\Company\SiteReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_5\Company\BillingTermsReference',
        'calendarId' => 'integer',
        'city' => 'string',
        'companyEntityType' => 'Spinen\ConnectWise\Models\v2018_5\Company\EntityTypeReference',
        'country' => 'Spinen\ConnectWise\Models\v2018_5\Company\CountryReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_5\Company\CurrencyReference',
        'customFields' => 'array',
        'dateAcquired' => 'Carbon\Carbon',
        'dateDeleted' => 'Carbon\Carbon',
        'defaultContact' => 'Spinen\ConnectWise\Models\v2018_5\Company\ContactReference',
        'deletedBy' => 'string',
        'deletedFlag' => 'boolean',
        'facebookUrl' => 'string',
        'faxNumber' => 'string',
        'id' => 'integer',
        'identifier' => 'string',
        'invoiceCCEmailAddress' => 'string',
        'invoiceDeliveryMethod' => 'Spinen\ConnectWise\Models\v2018_5\Company\BillingDeliveryReference',
        'invoiceTemplate' => 'Spinen\ConnectWise\Models\v2018_5\Company\InvoiceTemplateReference',
        'invoiceToEmailAddress' => 'string',
        'leadFlag' => 'boolean',
        'leadSource' => 'string',
        'linkedInUrl' => 'string',
        'marketId' => 'integer',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Company\Guid',
        'name' => 'string',
        'numberOfEmployees' => 'integer',
        'ownershipType' => 'Spinen\ConnectWise\Models\v2018_5\Company\OwnershipTypeReference',
        'parentCompany' => 'Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference',
        'phoneNumber' => 'string',
        'pricingSchedule' => 'Spinen\ConnectWise\Models\v2018_5\Company\PricingScheduleReference',
        'sicCode' => 'Spinen\ConnectWise\Models\v2018_5\Company\SicCodeReference',
        'state' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2018_5\Company\CompanyStatusReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_5\Company\TaxCodeReference',
        'taxIdentifier' => 'string',
        'territoryId' => 'integer',
        'territoryManager' => 'Spinen\ConnectWise\Models\v2018_5\Company\MemberReference',
        'timeZone' => 'Spinen\ConnectWise\Models\v2018_5\Company\TimeZoneSetupReference',
        'twitterUrl' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Company\CompanyTypeReference',
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
