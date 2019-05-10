<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Company Version v2018_4
 *
 * Model for Company
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CompanyStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CompanyTypeReference $type
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CountryReference $country
 * @property string $phoneNumber
 * @property string $faxNumber
 * @property string $website
 * @property integer $territoryId
 * @property integer $marketId
 * @property string $accountNumber
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ContactReference $defaultContact
 * @property Carbon\Carbon $dateAcquired
 * @property Spinen\ConnectWise\Models\v2018_4\Company\SicCodeReference $sicCode
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference $parentCompany
 * @property float $annualRevenue
 * @property integer $numberOfEmployees
 * @property Spinen\ConnectWise\Models\v2018_4\Company\OwnershipTypeReference $ownershipType
 * @property Spinen\ConnectWise\Models\v2018_4\Company\TimeZoneSetupReference $timeZone
 * @property string $leadSource
 * @property boolean $leadFlag
 * @property boolean $unsubscribeFlag
 * @property integer $calendarId
 * @property string $userDefinedField1
 * @property string $userDefinedField2
 * @property string $userDefinedField3
 * @property string $userDefinedField4
 * @property string $userDefinedField5
 * @property string $userDefinedField6
 * @property string $userDefinedField7
 * @property string $userDefinedField8
 * @property string $userDefinedField9
 * @property string $userDefinedField10
 * @property string $vendorIdentifier
 * @property string $taxIdentifier
 * @property Spinen\ConnectWise\Models\v2018_4\Company\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2018_4\Company\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2018_4\Company\InvoiceTemplateReference $invoiceTemplate
 * @property Spinen\ConnectWise\Models\v2018_4\Company\PricingScheduleReference $pricingSchedule
 * @property Spinen\ConnectWise\Models\v2018_4\Company\EntityTypeReference $companyEntityType
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_4\Company\SiteReference $billingSite
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ContactReference $billingContact
 * @property Spinen\ConnectWise\Models\v2018_4\Company\BillingDeliveryReference $invoiceDeliveryMethod
 * @property string $invoiceToEmailAddress
 * @property string $invoiceCCEmailAddress
 * @property boolean $deletedFlag
 * @property Carbon\Carbon $dateDeleted
 * @property string $deletedBy
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Guid $mobileGuid
 * @property string $facebookUrl
 * @property string $twitterUrl
 * @property string $linkedInUrl
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_4\Company\MemberReference $territoryManager
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 * @property array $customFields
 */
class Company extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Company\CompanyStatusReference',
        'type' => 'Spinen\ConnectWise\Models\v2018_4\Company\CompanyTypeReference',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'Spinen\ConnectWise\Models\v2018_4\Company\CountryReference',
        'phoneNumber' => 'string',
        'faxNumber' => 'string',
        'website' => 'string',
        'territoryId' => 'integer',
        'marketId' => 'integer',
        'accountNumber' => 'string',
        'defaultContact' => 'Spinen\ConnectWise\Models\v2018_4\Company\ContactReference',
        'dateAcquired' => 'Carbon\Carbon',
        'sicCode' => 'Spinen\ConnectWise\Models\v2018_4\Company\SicCodeReference',
        'parentCompany' => 'Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference',
        'annualRevenue' => 'float',
        'numberOfEmployees' => 'integer',
        'ownershipType' => 'Spinen\ConnectWise\Models\v2018_4\Company\OwnershipTypeReference',
        'timeZone' => 'Spinen\ConnectWise\Models\v2018_4\Company\TimeZoneSetupReference',
        'leadSource' => 'string',
        'leadFlag' => 'boolean',
        'unsubscribeFlag' => 'boolean',
        'calendarId' => 'integer',
        'userDefinedField1' => 'string',
        'userDefinedField2' => 'string',
        'userDefinedField3' => 'string',
        'userDefinedField4' => 'string',
        'userDefinedField5' => 'string',
        'userDefinedField6' => 'string',
        'userDefinedField7' => 'string',
        'userDefinedField8' => 'string',
        'userDefinedField9' => 'string',
        'userDefinedField10' => 'string',
        'vendorIdentifier' => 'string',
        'taxIdentifier' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Company\TaxCodeReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_4\Company\BillingTermsReference',
        'invoiceTemplate' => 'Spinen\ConnectWise\Models\v2018_4\Company\InvoiceTemplateReference',
        'pricingSchedule' => 'Spinen\ConnectWise\Models\v2018_4\Company\PricingScheduleReference',
        'companyEntityType' => 'Spinen\ConnectWise\Models\v2018_4\Company\EntityTypeReference',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference',
        'billingSite' => 'Spinen\ConnectWise\Models\v2018_4\Company\SiteReference',
        'billingContact' => 'Spinen\ConnectWise\Models\v2018_4\Company\ContactReference',
        'invoiceDeliveryMethod' => 'Spinen\ConnectWise\Models\v2018_4\Company\BillingDeliveryReference',
        'invoiceToEmailAddress' => 'string',
        'invoiceCCEmailAddress' => 'string',
        'deletedFlag' => 'boolean',
        'dateDeleted' => 'Carbon\Carbon',
        'deletedBy' => 'string',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_4\Company\Guid',
        'facebookUrl' => 'string',
        'twitterUrl' => 'string',
        'linkedInUrl' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Company\CurrencyReference',
        'territoryManager' => 'Spinen\ConnectWise\Models\v2018_4\Company\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
        'customFields' => 'array',
    ];
}
