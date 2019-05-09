<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeLevel Version v2019_2
 * 
 * Model for TaxCodeLevel
 *
 * @property integer $id
 * @property integer $taxLevel
 * @property number $taxRate
 * @property string $rateType
 * @property number $taxableMax
 * @property string $caption
 * @property string $taxCodeXref
 * @property string $agencyXref
 * @property boolean $taxServicesFlag
 * @property boolean $taxExpensesFlag
 * @property boolean $taxProductsFlag
 * @property boolean $singleUnitFlag
 * @property number $singleUnitMinimum
 * @property number $singleUnitMaximum
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
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
        'taxRate' => 'number',
        'rateType' => 'string',
        'taxableMax' => 'number',
        'caption' => 'string',
        'taxCodeXref' => 'string',
        'agencyXref' => 'string',
        'taxServicesFlag' => 'boolean',
        'taxExpensesFlag' => 'boolean',
        'taxProductsFlag' => 'boolean',
        'singleUnitFlag' => 'boolean',
        'singleUnitMinimum' => 'number',
        'singleUnitMaximum' => 'number',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
    ];
}
