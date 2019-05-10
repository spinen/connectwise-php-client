<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Contact Version v2019_1
 *
 * Model for Contact
 *
 * @property Carbon\Carbon $anniversary
 * @property Carbon\Carbon $birthDay
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ContactDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ContactReference $assistantContact
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ContactReference $managerContact
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Company\RelationshipReference $relationship
 * @property Spinen\ConnectWise\Models\v2019_1\Company\SiteReference $site
 * @property array $communicationItems
 * @property array $customFields
 * @property array $typeIds
 * @property boolean $childrenFlag
 * @property boolean $defaultBillingFlag
 * @property boolean $defaultFlag
 * @property boolean $disablePortalLoginFlag
 * @property boolean $inactiveFlag
 * @property boolean $marriedFlag
 * @property boolean $unsubscribeFlag
 * @property integer $defaultMergeContactId
 * @property integer $id
 * @property integer $portalSecurityLevel
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $facebookUrl
 * @property string $firstName
 * @property string $gender
 * @property string $lastName
 * @property string $linkedInUrl
 * @property string $nickName
 * @property string $portalPassword
 * @property string $presence
 * @property string $relationshipOverride
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'anniversary' => 'Carbon\Carbon',
        'assistantContact' => 'Spinen\ConnectWise\Models\v2019_1\Company\ContactReference',
        'birthDay' => 'Carbon\Carbon',
        'childrenFlag' => 'boolean',
        'city' => 'string',
        'communicationItems' => 'array',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference',
        'country' => 'Spinen\ConnectWise\Models\v2019_1\Company\CountryReference',
        'customFields' => 'array',
        'defaultBillingFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'defaultMergeContactId' => 'integer',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\Company\ContactDepartmentReference',
        'disablePortalLoginFlag' => 'boolean',
        'facebookUrl' => 'string',
        'firstName' => 'string',
        'gender' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'lastName' => 'string',
        'linkedInUrl' => 'string',
        'managerContact' => 'Spinen\ConnectWise\Models\v2019_1\Company\ContactReference',
        'marriedFlag' => 'boolean',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_1\Company\Guid',
        'nickName' => 'string',
        'portalPassword' => 'string',
        'portalSecurityLevel' => 'integer',
        'presence' => 'string',
        'relationship' => 'Spinen\ConnectWise\Models\v2019_1\Company\RelationshipReference',
        'relationshipOverride' => 'string',
        'school' => 'string',
        'securityIdentifier' => 'string',
        'significantOther' => 'string',
        'site' => 'Spinen\ConnectWise\Models\v2019_1\Company\SiteReference',
        'state' => 'string',
        'title' => 'string',
        'twitterUrl' => 'string',
        'typeIds' => 'array',
        'unsubscribeFlag' => 'boolean',
        'zip' => 'string',
    ];
}
