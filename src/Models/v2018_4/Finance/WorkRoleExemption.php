<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRoleExemption Version v2018_4
 *
 * Model for WorkRoleExemption
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\WorkRoleReference $workRole
 * @property boolean $levelOneFlag
 * @property boolean $levelTwoFlag
 * @property boolean $levelThreeFlag
 * @property boolean $levelFourFlag
 * @property boolean $levelFiveFlag
 * @property boolean $levelSixFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 */
class WorkRoleExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_4\Finance\WorkRoleReference',
        'levelOneFlag' => 'boolean',
        'levelTwoFlag' => 'boolean',
        'levelThreeFlag' => 'boolean',
        'levelFourFlag' => 'boolean',
        'levelFiveFlag' => 'boolean',
        'levelSixFlag' => 'boolean',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
    ];
}
