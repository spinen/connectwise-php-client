<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Contact Version v2018_4
 *
 * Model for Contact
 *
 * @property integer $id
 * @property string $firstName
 * @property string $lastName
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ContactTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Company\SiteReference $site
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $country
 * @property Spinen\ConnectWise\Models\v2018_4\Company\RelationshipReference $relationship
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ContactDepartmentReference $department
 * @property boolean $inactiveFlag
 * @property integer $defaultMergeContactId
 * @property string $securityIdentifier
 * @property integer $managerContactId
 * @property integer $assistantContactId
 * @property string $title
 * @property string $school
 * @property string $nickName
 * @property boolean $marriedFlag
 * @property boolean $childrenFlag
 * @property string $significantOther
 * @property string $portalPassword
 * @property integer $portalSecurityLevel
 * @property boolean $disablePortalLoginFlag
 * @property boolean $unsubscribeFlag
 * @property string $gender
 * @property Carbon\Carbon $birthDay
 * @property Carbon\Carbon $anniversary
 * @property string $presence
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Guid $mobileGuid
 * @property string $facebookUrl
 * @property string $twitterUrl
 * @property string $linkedInUrl
 * @property boolean $defaultBillingFlag
 * @property boolean $defaultFlag
 * @property array $communicationItems
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 * @property array $customFields
 */
class Contact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstName' => 'string',
        'lastName' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2018_4\Company\ContactTypeReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference',
        'site' => 'Spinen\ConnectWise\Models\v2018_4\Company\SiteReference',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'string',
        'relationship' => 'Spinen\ConnectWise\Models\v2018_4\Company\RelationshipReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_4\Company\ContactDepartmentReference',
        'inactiveFlag' => 'boolean',
        'defaultMergeContactId' => 'integer',
        'securityIdentifier' => 'string',
        'managerContactId' => 'integer',
        'assistantContactId' => 'integer',
        'title' => 'string',
        'school' => 'string',
        'nickName' => 'string',
        'marriedFlag' => 'boolean',
        'childrenFlag' => 'boolean',
        'significantOther' => 'string',
        'portalPassword' => 'string',
        'portalSecurityLevel' => 'integer',
        'disablePortalLoginFlag' => 'boolean',
        'unsubscribeFlag' => 'boolean',
        'gender' => 'string',
        'birthDay' => 'Carbon\Carbon',
        'anniversary' => 'Carbon\Carbon',
        'presence' => 'string',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_4\Company\Guid',
        'facebookUrl' => 'string',
        'twitterUrl' => 'string',
        'linkedInUrl' => 'string',
        'defaultBillingFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'communicationItems' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
        'customFields' => 'array',
    ];
}
