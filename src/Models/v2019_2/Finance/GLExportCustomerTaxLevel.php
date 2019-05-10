<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportCustomerTaxLevel Version v2019_2
 * 
 * Model for GLExportCustomerTaxLevel
 *
 * @property float $taxRate
 * @property string $taxCodeXref
 * @property string $agencyXref
 * @property integer $taxLevel
 */
class GLExportCustomerTaxLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'taxRate' => 'float',
        'taxCodeXref' => 'string',
        'agencyXref' => 'string',
        'taxLevel' => 'integer',
    ];
}
