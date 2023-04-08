<?php

namespace Spinen\ConnectWise\Models\v2019_5\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CalculateInvoiceTax Version v2019_5
 *
 * Model for CalculateInvoiceTax
 *
 * @property float $salesTax
 * @property int $id
 */
class CalculateInvoiceTax extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'salesTax' => 'float',
    ];
}
