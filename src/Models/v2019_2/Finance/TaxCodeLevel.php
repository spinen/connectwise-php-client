<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

class TaxCodeLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'taxLevel' => 'integer',
        'taxRate' => 'double',
        'rateType' => 'string',
        'taxableMax' => 'double',
        'caption' => 'string',
        'taxCodeXref' => 'string',
        'agencyXref' => 'string',
        'taxServicesFlag' => 'boolean',
        'taxExpensesFlag' => 'boolean',
        'taxProductsFlag' => 'boolean',
        'singleUnitFlag' => 'boolean',
        'singleUnitMinimum' => 'double',
        'singleUnitMaximum' => 'double',
    ];
}
