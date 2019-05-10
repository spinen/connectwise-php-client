<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeLevel Version v2019_1
 *
 * Model for TaxCodeLevel
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 * @property boolean $singleUnitFlag
 * @property boolean $taxExpensesFlag
 * @property boolean $taxProductsFlag
 * @property boolean $taxServicesFlag
 * @property float $singleUnitMaximum
 * @property float $singleUnitMinimum
 * @property float $taxRate
 * @property float $taxableMax
 * @property integer $id
 * @property integer $taxLevel
 * @property string $agencyXref
 * @property string $caption
 * @property string $rateType
 * @property string $taxCodeXref
 */
class TaxCodeLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
        'agencyXref' => 'string',
        'caption' => 'string',
        'id' => 'integer',
        'rateType' => 'string',
        'singleUnitFlag' => 'boolean',
        'singleUnitMaximum' => 'float',
        'singleUnitMinimum' => 'float',
        'taxCodeXref' => 'string',
        'taxExpensesFlag' => 'boolean',
        'taxLevel' => 'integer',
        'taxProductsFlag' => 'boolean',
        'taxRate' => 'float',
        'taxServicesFlag' => 'boolean',
        'taxableMax' => 'float',
    ];
}
