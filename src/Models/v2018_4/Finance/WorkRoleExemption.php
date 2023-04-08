<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRoleExemption Version v2018_4
 *
 * Model for WorkRoleExemption
 *
 * @property Metadata $_info
 * @property TaxCodeReference $taxCode
 * @property WorkRoleReference $workRole
 * @property bool $levelFiveFlag
 * @property bool $levelFourFlag
 * @property bool $levelOneFlag
 * @property bool $levelSixFlag
 * @property bool $levelThreeFlag
 * @property bool $levelTwoFlag
 * @property int $id
 */
class WorkRoleExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'levelFiveFlag' => 'boolean',
        'levelFourFlag' => 'boolean',
        'levelOneFlag' => 'boolean',
        'levelSixFlag' => 'boolean',
        'levelThreeFlag' => 'boolean',
        'levelTwoFlag' => 'boolean',
        'taxCode' => TaxCodeReference::class,
        'workRole' => WorkRoleReference::class,
    ];
}
