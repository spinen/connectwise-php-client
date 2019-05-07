<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingUnpostedExpenseTaxableLevel
 *
 * @property integer $id
 * @property integer $taxLevel
 * @property string $taxCodeXref
 * @property double $taxAmount
 */
class AccountingUnpostedExpenseTaxableLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'taxLevel' => 'integer',
        'taxCodeXref' => 'string',
        'taxAmount' => 'double',
    ];
}
