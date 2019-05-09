<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransactionTaxLevel Version v2019_3
 * 
 * Model for GLExportTransactionTaxLevel
 *
 * @property number $taxAmount
 * @property number $taxableAmount
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
        'taxAmount' => 'number',
        'taxableAmount' => 'number',
        'taxCodeXref' => 'string',
        'taxLevel' => 'integer',
    ];
}
