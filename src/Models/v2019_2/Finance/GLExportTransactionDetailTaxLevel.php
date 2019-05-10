<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransactionDetailTaxLevel Version v2019_2
 *
 * Model for GLExportTransactionDetailTaxLevel
 *
 * @property boolean $taxableFlag
 * @property integer $taxLevel
 */
class GLExportTransactionDetailTaxLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'taxLevel' => 'integer',
        'taxableFlag' => 'boolean',
    ];
}
