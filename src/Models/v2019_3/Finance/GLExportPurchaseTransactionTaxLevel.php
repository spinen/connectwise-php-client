<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportPurchaseTransactionTaxLevel Version v2019_3
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
