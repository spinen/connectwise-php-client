<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyTeam Version v2019_1
 *
 * Model for CompanyTeam
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Company\TeamRoleReference $teamRole
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_1\Company\MemberReference $member
 * @property boolean $accountManagerFlag
 * @property boolean $techFlag
 * @property boolean $salesFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 */
class CompanyTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference',
        'teamRole' => 'Spinen\ConnectWise\Models\v2019_1\Company\TeamRoleReference',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Company\ContactReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Company\MemberReference',
        'accountManagerFlag' => 'boolean',
        'techFlag' => 'boolean',
        'salesFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
    ];
}
