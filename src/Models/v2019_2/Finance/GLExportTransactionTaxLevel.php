<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransactionTaxLevel Version v2019_2
 * 
 * Model for GLExportTransactionTaxLevel
 *
 * @property float $taxAmount
 * @property float $taxableAmount
 * @property string $taxCodeXref
 * @property integer $taxLevel
 */
class GLExportTransactionTaxLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'taxAmount' => 'float',
        'taxableAmount' => 'float',
        'taxCodeXref' => 'string',
        'taxLevel' => 'integer',
    ];
}
