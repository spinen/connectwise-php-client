<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyTeam Version v2019_2
 *
 * Model for CompanyTeam
 *
 * @property CompanyReference $company
 * @property ContactReference $contact
 * @property MemberReference $member
 * @property Metadata $_info
 * @property TeamRoleReference $teamRole
 * @property boolean $accountManagerFlag
 * @property boolean $salesFlag
 * @property boolean $techFlag
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
 */
class CompanyTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'accountManagerFlag' => 'boolean',
        'businessUnitId' => 'integer',
        'company' => CompanyReference::class,
        'contact' => ContactReference::class,
        'id' => 'integer',
        'locationId' => 'integer',
        'member' => MemberReference::class,
        'salesFlag' => 'boolean',
        'teamRole' => TeamRoleReference::class,
        'techFlag' => 'boolean',
    ];
}
