<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Opportunity
 *
 * @property integer $id
 * @property string $name
 * @property carbon $expectedCloseDate
 * @property string $notes
 * @property string $source
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property string $customerPO
 * @property carbon $pipelineChangeDate
 * @property carbon $dateBecameLead
 * @property carbon $closedDate
 * @property double $totalSalesTax
 * @property array $customFields
 */
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
