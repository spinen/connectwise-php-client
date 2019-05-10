<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Contact Version v2019_3
 *
 * Model for Contact
 *
 * @property integer $id
 * @property string $firstName
 * @property string $lastName
 * @property Spinen\ConnectWise\Models\v2019_3\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\Company\SiteReference $site
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property Spinen\ConnectWise\Models\v2019_3\Company\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2019_3\Company\RelationshipReference $relationship
 * @property string $relationshipOverride
 * @property Spinen\ConnectWise\Models\v2019_3\Company\ContactDepartmentReference $department
 * @property boolean $inactiveFlag
 * @property integer $defaultMergeContactId
 * @property string $securityIdentifier
 * @property Spinen\ConnectWise\Models\v2019_3\Company\ContactReference $managerContact
 * @property Spinen\ConnectWise\Models\v2019_3\Company\ContactReference $assistantContact
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
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Guid $mobileGuid
 * @property string $facebookUrl
 * @property string $twitterUrl
 * @property string $linkedInUrl
 * @property boolean $defaultBillingFlag
 * @property boolean $defaultFlag
 * @property array $communicationItems
 * @property array $typeIds
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
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
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Company\CompanyReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_3\Company\SiteReference',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'Spinen\ConnectWise\Models\v2019_3\Company\CountryReference',
        'relationship' => 'Spinen\ConnectWise\Models\v2019_3\Company\RelationshipReference',
        'relationshipOverride' => 'string',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\Company\ContactDepartmentReference',
        'inactiveFlag' => 'boolean',
        'defaultMergeContactId' => 'integer',
        'securityIdentifier' => 'string',
        'managerContact' => 'Spinen\ConnectWise\Models\v2019_3\Company\ContactReference',
        'assistantContact' => 'Spinen\ConnectWise\Models\v2019_3\Company\ContactReference',
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
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_3\Company\Guid',
        'facebookUrl' => 'string',
        'twitterUrl' => 'string',
        'linkedInUrl' => 'string',
        'defaultBillingFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'communicationItems' => 'array',
        'typeIds' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
    ];
}
