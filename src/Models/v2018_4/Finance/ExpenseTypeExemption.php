<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTypeExemption Version v2018_4
 *
 * Model for ExpenseTypeExemption
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ExpenseTypeReference $expenseType
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference $taxCode
 * @property boolean $levelFiveFlag
 * @property boolean $levelFourFlag
 * @property boolean $levelOneFlag
 * @property boolean $levelSixFlag
 * @property boolean $levelThreeFlag
 * @property boolean $levelTwoFlag
 * @property integer $id
 */
class ExpenseTypeExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
        'expenseType' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ExpenseTypeReference',
        'id' => 'integer',
        'levelFiveFlag' => 'boolean',
        'levelFourFlag' => 'boolean',
        'levelOneFlag' => 'boolean',
        'levelSixFlag' => 'boolean',
        'levelThreeFlag' => 'boolean',
        'levelTwoFlag' => 'boolean',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference',
    ];
}
