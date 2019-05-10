<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToSalesOrderConversion Version v2019_1
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
