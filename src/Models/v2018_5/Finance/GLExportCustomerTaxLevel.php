<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportCustomerTaxLevel Version v2018_5
 * 
 * Model for GLExportCustomerTaxLevel
 *
 * @property number $taxRate
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
        'taxRate' => 'number',
        'taxCodeXref' => 'string',
        'agencyXref' => 'string',
        'taxLevel' => 'integer',
    ];
}
