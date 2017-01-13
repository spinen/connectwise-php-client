<?php

namespace Spinen\ConnectWise\Models\Sales;

use Spinen\ConnectWise\Support\Model;

class Opportunity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'expectedCloseDate' => 'carbon',
        'notes' => 'string',
        'source' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'customerPO' => 'string',
        'pipelineChangeDate' => 'carbon',
        'dateBecameLead' => 'carbon',
        'closedDate' => 'carbon',
        'totalSalesTax' => 'double',
        'customFields' => 'array',
    ];
}
