<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyTeam Version v2019_1
 *
 * Model for CompanyTeam
 *
 * @property CompanyReference $company
 * @property ContactReference $contact
 * @property MemberReference $member
 * @property Metadata $_info
 * @property TeamRoleReference $teamRole
 * @property bool $accountManagerFlag
 * @property bool $salesFlag
 * @property bool $techFlag
 * @property int $businessUnitId
 * @property int $id
 * @property int $locationId
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
