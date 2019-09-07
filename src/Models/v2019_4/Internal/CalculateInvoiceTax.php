<?php

namespace Spinen\ConnectWise\Models\v2019_4\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CalculateInvoiceTax Version v2019_4
 *
 * Model for CalculateInvoiceTax
 *
 * @property float $salesTax
 * @property integer $id
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
        'salesTax' => 'float'
    ];
}
