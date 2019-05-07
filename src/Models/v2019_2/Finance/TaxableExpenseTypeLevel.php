<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxableExpenseTypeLevel
 *
 * @property integer $id
 */
class TaxableExpenseTypeLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}
