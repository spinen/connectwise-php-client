<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransactionDetailTaxLevel Version v2018_5
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
        'taxableFlag' => 'boolean',
        'taxLevel' => 'integer',
    ];
}
