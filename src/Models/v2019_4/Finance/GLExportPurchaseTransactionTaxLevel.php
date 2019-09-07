<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportPurchaseTransactionTaxLevel Version v2019_4
 *
 * Model for GLExportPurchaseTransactionTaxLevel
 *
 * @property integer $taxLevel
 * @property string $taxCodeXref
 */
class GLExportPurchaseTransactionTaxLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'taxCodeXref' => 'string',
        'taxLevel' => 'integer'
    ];
}
