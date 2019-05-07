<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyTeam
 *
 * @property integer $id
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property boolean $accountManagerFlag
 * @property boolean $techFlag
 * @property boolean $salesFlag
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
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'accountManagerFlag' => 'boolean',
        'techFlag' => 'boolean',
        'salesFlag' => 'boolean',
    ];
}
