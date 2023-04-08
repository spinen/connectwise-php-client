<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedExpenseTaxableLevel Version v2019_4
 *
 * Model for UnpostedExpenseTaxableLevel
 *
 * @property Metadata $_info
 * @property float $taxAmount
 * @property int $id
 * @property int $taxLevel
 * @property string $taxCodeXref
 */
class UnpostedExpenseTaxableLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'taxAmount' => 'float',
        'taxCodeXref' => 'string',
        'taxLevel' => 'integer',
    ];
}
