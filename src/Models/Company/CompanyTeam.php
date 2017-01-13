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
        'id' => 'integer',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'accountManagerFlag' => 'boolean',
        'techFlag' => 'boolean',
        'salesFlag' => 'boolean',
    ];
}
