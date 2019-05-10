<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToSalesOrderConversion Version v2018_4
 *
 * Model for OpportunityToSalesOrderConversion
 *
 * @property integer $salesOrderId
 * @property string $name
 * @property boolean $includeAllNotesFlag
 * @property boolean $includeAllDocumentsFlag
 * @property boolean $includeAllProductsFlag
 * @property array $includeNoteIds
 * @property array $includeDocumentIds
 * @property array $includeProductIds
 */
class OpportunityToSalesOrderConversion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'salesOrderId' => 'integer',
        'name' => 'string',
        'includeAllNotesFlag' => 'boolean',
        'includeAllDocumentsFlag' => 'boolean',
        'includeAllProductsFlag' => 'boolean',
        'includeNoteIds' => 'array',
        'includeDocumentIds' => 'array',
        'includeProductIds' => 'array',
    ];
}
