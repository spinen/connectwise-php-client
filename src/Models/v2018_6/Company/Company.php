<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Company
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phoneNumber
 * @property string $faxNumber
 * @property string $website
 * @property string $accountNumber
 * @property carbon $dateAcquired
 * @property double $annualRevenue
 * @property integer $numberOfEmployees
 * @property string $leadSource
 * @property boolean $leadFlag
 * @property boolean $unsubscribeFlag
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
 * @property string $invoiceToEmailAddress
 * @property string $invoiceCCEmailAddress
 * @property boolean $deletedFlag
 * @property carbon $dateDeleted
 * @property string $deletedBy
 * @property string $facebookUrl
 * @property string $twitterUrl
 * @property string $linkedInUrl
 * @property array $typeIds
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
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'phoneNumber' => 'string',
        'faxNumber' => 'string',
        'website' => 'string',
        'accountNumber' => 'string',
        'dateAcquired' => 'carbon',
        'annualRevenue' => 'double',
        'numberOfEmployees' => 'integer',
        'leadSource' => 'string',
        'leadFlag' => 'boolean',
        'unsubscribeFlag' => 'boolean',
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
        'invoiceToEmailAddress' => 'string',
        'invoiceCCEmailAddress' => 'string',
        'deletedFlag' => 'boolean',
        'dateDeleted' => 'carbon',
        'deletedBy' => 'string',
        'facebookUrl' => 'string',
        'twitterUrl' => 'string',
        'linkedInUrl' => 'string',
        'typeIds' => 'array',
        'customFields' => 'array',
    ];
}
