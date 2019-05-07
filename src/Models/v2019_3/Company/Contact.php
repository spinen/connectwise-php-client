<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Contact
 *
 * @property integer $id
 * @property string $firstName
 * @property string $lastName
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $relationshipOverride
 * @property boolean $inactiveFlag
 * @property integer $defaultMergeContactId
 * @property string $securityIdentifier
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
 * @property carbon $birthDay
 * @property carbon $anniversary
 * @property string $presence
 * @property string $facebookUrl
 * @property string $twitterUrl
 * @property string $linkedInUrl
 * @property boolean $defaultBillingFlag
 * @property boolean $defaultFlag
 * @property array $communicationItems
 * @property array $typeIds
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
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'relationshipOverride' => 'string',
        'inactiveFlag' => 'boolean',
        'defaultMergeContactId' => 'integer',
        'securityIdentifier' => 'string',
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
        'birthDay' => 'carbon',
        'anniversary' => 'carbon',
        'presence' => 'string',
        'facebookUrl' => 'string',
        'twitterUrl' => 'string',
        'linkedInUrl' => 'string',
        'defaultBillingFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'communicationItems' => 'array',
        'typeIds' => 'array',
    ];
}
