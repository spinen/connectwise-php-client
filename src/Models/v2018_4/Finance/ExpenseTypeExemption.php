<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTypeExemption Version v2018_4
 *
 * Model for ExpenseTypeExemption
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ExpenseTypeReference $expenseType
 * @property boolean $levelOneFlag
 * @property boolean $levelTwoFlag
 * @property boolean $levelThreeFlag
 * @property boolean $levelFourFlag
 * @property boolean $levelFiveFlag
 * @property boolean $levelSixFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 */
class ExpenseTypeExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'expenseType' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ExpenseTypeReference',
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
