<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeLevel Version v2018_5
 *
 * Model for TaxCodeLevel
 *
 * @property Metadata $_info
 * @property bool $singleUnitFlag
 * @property bool $taxExpensesFlag
 * @property bool $taxProductsFlag
 * @property bool $taxServicesFlag
 * @property float $singleUnitMaximum
 * @property float $singleUnitMinimum
 * @property float $taxRate
 * @property float $taxableMax
 * @property int $id
 * @property int $taxLevel
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
        '_info' => Metadata::class,
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
