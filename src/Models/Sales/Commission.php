<?php

namespace Spinen\ConnectWise\Models\Sales;

use Spinen\ConnectWise\Support\Model;

class Commission extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'commissionPercent' => 'double',
        'dateStart' => 'carbon',
        'dateEnd' => 'carbon',
        'billingMethod' => 'string',
        'numberOfMonths' => 'integer',
        'commissionBasis' => 'string',
        'invoiceOption' => 'string',
        'servicesFlag' => 'boolean',
        'agreementsFlag' => 'boolean',
        'productsFlag' => 'boolean',
        'myOpportunitiesFlag' => 'boolean',
    ];
}
