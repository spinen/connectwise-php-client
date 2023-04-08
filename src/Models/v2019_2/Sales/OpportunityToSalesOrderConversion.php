<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToSalesOrderConversion Version v2019_2
 *
 * Model for OpportunityToSalesOrderConversion
 *
 * @property array $includeDocumentIds
 * @property array $includeNoteIds
 * @property array $includeProductIds
 * @property bool $includeAllDocumentsFlag
 * @property bool $includeAllNotesFlag
 * @property bool $includeAllProductsFlag
 * @property int $salesOrderId
 * @property string $name
 */
class OpportunityToSalesOrderConversion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'includeAllDocumentsFlag' => 'boolean',
        'includeAllNotesFlag' => 'boolean',
        'includeAllProductsFlag' => 'boolean',
        'includeDocumentIds' => 'array',
        'includeNoteIds' => 'array',
        'includeProductIds' => 'array',
        'name' => 'string',
        'salesOrderId' => 'integer',
    ];
}
