<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportPurchaseTransactionTaxLevel Version v2018_6
 *
 * Model for GLExportPurchaseTransactionTaxLevel
 *
 * @property int $taxLevel
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
        'taxLevel' => 'integer',
    ];
}
