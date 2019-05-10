<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedProcurementTaxableLevel Version v2019_3
 *
 * Model for UnpostedProcurementTaxableLevel
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property float $taxAmount
 * @property integer $id
 * @property integer $taxLevel
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'id' => 'integer',
        'taxAmount' => 'float',
        'taxCodeXref' => 'string',
        'taxLevel' => 'integer',
    ];
}
