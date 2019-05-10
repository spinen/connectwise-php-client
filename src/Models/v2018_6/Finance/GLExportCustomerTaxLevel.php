<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportCustomerTaxLevel Version v2018_6
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
