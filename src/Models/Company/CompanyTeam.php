<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class CompanyTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'                 => 'integer',
        //        'company'            => 'CompanyReference',
        //        'teamRole'           => 'TeamRoleReference',
        'locationId'         => 'integer',
        'businessUnitId'     => 'integer',
        //        'contact'            => 'ContactReference',
        //        'member'             => 'MemberReference',
        'accountManagerFlag' => 'boolean',
        'techFlag'           => 'boolean',
        'salesFlag'          => 'boolean',
        //        '_info'              => 'Metadata',
    ];
}
