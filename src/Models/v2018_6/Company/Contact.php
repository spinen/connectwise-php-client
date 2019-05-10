<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Contact Version v2018_6
 *
 * Model for Contact
 *
 * @property Carbon\Carbon $anniversary
 * @property Carbon\Carbon $birthDay
 * @property CompanyReference $company
 * @property ContactDepartmentReference $department
 * @property ContactReference $assistantContact
 * @property ContactReference $managerContact
 * @property CountryReference $country
 * @property Guid $mobileGuid
 * @property Metadata $_info
 * @property RelationshipReference $relationship
 * @property SiteReference $site
 * @property array $communicationItems
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
        '_info' => Metadata::class,
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'anniversary' => Carbon\Carbon::class,
        'assistantContact' => ContactReference::class,
        'birthDay' => Carbon\Carbon::class,
        'childrenFlag' => 'boolean',
        'city' => 'string',
        'communicationItems' => 'array',
        'company' => CompanyReference::class,
        'country' => CountryReference::class,
        'defaultBillingFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'defaultMergeContactId' => 'integer',
        'department' => ContactDepartmentReference::class,
        'disablePortalLoginFlag' => 'boolean',
        'facebookUrl' => 'string',
        'firstName' => 'string',
        'gender' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'lastName' => 'string',
        'linkedInUrl' => 'string',
        'managerContact' => ContactReference::class,
        'marriedFlag' => 'boolean',
        'mobileGuid' => Guid::class,
        'nickName' => 'string',
        'portalPassword' => 'string',
        'portalSecurityLevel' => 'integer',
        'presence' => 'string',
        'relationship' => RelationshipReference::class,
        'relationshipOverride' => 'string',
        'school' => 'string',
        'securityIdentifier' => 'string',
        'significantOther' => 'string',
        'site' => SiteReference::class,
        'state' => 'string',
        'title' => 'string',
        'twitterUrl' => 'string',
        'typeIds' => 'array',
        'unsubscribeFlag' => 'boolean',
        'zip' => 'string',
    ];
}
