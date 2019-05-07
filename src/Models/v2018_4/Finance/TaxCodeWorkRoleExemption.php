<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeWorkRoleExemption
 *
 * @property integer $id
 * @property boolean $levelOneFlag
 * @property boolean $levelTwoFlag
 * @property boolean $levelThreeFlag
 * @property boolean $levelFourFlag
 * @property boolean $levelFiveFlag
 * @property boolean $levelSixFlag
 */
class TaxCodeWorkRoleExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'levelOneFlag' => 'boolean',
        'levelTwoFlag' => 'boolean',
        'levelThreeFlag' => 'boolean',
        'levelFourFlag' => 'boolean',
        'levelFiveFlag' => 'boolean',
        'levelSixFlag' => 'boolean',
    ];
}
