<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Contact Version v2018_5
 *
 * Model for Contact
 *
 * @property Carbon\Carbon $anniversary
 * @property Carbon\Carbon $birthDay
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ContactDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ContactTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Company\RelationshipReference $relationship
 * @property Spinen\ConnectWise\Models\v2018_5\Company\SiteReference $site
 * @property array $communicationItems
 * @property array $customFields
 * @property boolean $childrenFlag
 * @property boolean $defaultBillingFlag
 * @property boolean $defaultFlag
 * @property boolean $disablePortalLoginFlag
 * @property boolean $inactiveFlag
 * @property boolean $marriedFlag
 * @property boolean $unsubscribeFlag
 * @property integer $assistantContactId
 * @property integer $defaultMergeContactId
 * @property integer $id
 * @property integer $managerContactId
 * @property integer $portalSecurityLevel
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $country
 * @property string $facebookUrl
 * @property string $firstName
 * @property string $gender
 * @property string $lastName
 * @property string $linkedInUrl
 * @property string $nickName
 * @property string $portalPassword
 * @property string $presence
 * @property string $school
 * @property string $securityIdentifier
 * @property string $significantOther
 * @property string $state
 * @property string $title
 * @property string $twitterUrl
 * @property string $zip
 */
class Contact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'anniversary' => 'Carbon\Carbon',
        'assistantContactId' => 'integer',
        'birthDay' => 'Carbon\Carbon',
        'childrenFlag' => 'boolean',
        'city' => 'string',
        'communicationItems' => 'array',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference',
        'country' => 'string',
        'customFields' => 'array',
        'defaultBillingFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'defaultMergeContactId' => 'integer',
        'department' => 'Spinen\ConnectWise\Models\v2018_5\Company\ContactDepartmentReference',
        'disablePortalLoginFlag' => 'boolean',
        'facebookUrl' => 'string',
        'firstName' => 'string',
        'gender' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'lastName' => 'string',
        'linkedInUrl' => 'string',
        'managerContactId' => 'integer',
        'marriedFlag' => 'boolean',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Company\Guid',
        'nickName' => 'string',
        'portalPassword' => 'string',
        'portalSecurityLevel' => 'integer',
        'presence' => 'string',
        'relationship' => 'Spinen\ConnectWise\Models\v2018_5\Company\RelationshipReference',
        'school' => 'string',
        'securityIdentifier' => 'string',
        'significantOther' => 'string',
        'site' => 'Spinen\ConnectWise\Models\v2018_5\Company\SiteReference',
        'state' => 'string',
        'title' => 'string',
        'twitterUrl' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Company\ContactTypeReference',
        'unsubscribeFlag' => 'boolean',
        'zip' => 'string',
    ];
}
