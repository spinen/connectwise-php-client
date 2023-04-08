<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedProcurementTaxableLevel Version v2019_1
 *
 * Model for UnpostedProcurementTaxableLevel
 *
 * @property Metadata $_info
 * @property float $taxAmount
 * @property int $id
 * @property int $taxLevel
 * @property string $taxCodeXref
 */
class UnpostedProcurementTaxableLevel extends Model
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
