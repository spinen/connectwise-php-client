<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeLevel
 *
 * @property integer $id
 * @property integer $taxLevel
 * @property double $taxRate
 * @property string $rateType
 * @property double $taxableMax
 * @property string $caption
 * @property string $taxCodeXref
 * @property string $agencyXref
 * @property boolean $taxServicesFlag
 * @property boolean $taxExpensesFlag
 * @property boolean $taxProductsFlag
 * @property boolean $singleUnitFlag
 * @property double $singleUnitMinimum
 * @property double $singleUnitMaximum
 */
class TaxCodeLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'taxLevel' => 'integer',
        'taxRate' => 'double',
        'rateType' => 'string',
        'taxableMax' => 'double',
        'caption' => 'string',
        'taxCodeXref' => 'string',
        'agencyXref' => 'string',
        'taxServicesFlag' => 'boolean',
        'taxExpensesFlag' => 'boolean',
        'taxProductsFlag' => 'boolean',
        'singleUnitFlag' => 'boolean',
        'singleUnitMinimum' => 'double',
        'singleUnitMaximum' => 'double',
    ];
}
