<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToServiceTicketConversion Version v2019_1
 *
 * Model for OpportunityToServiceTicketConversion
 *
 * @property array $includeDocumentIds
 * @property array $includeNoteIds
 * @property array $includeProductIds
 * @property bool $includeAllDocumentsFlag
 * @property bool $includeAllNotesFlag
 * @property bool $includeAllProductsFlag
 * @property int $ticketId
 * @property string $summary
 */
class OpportunityToServiceTicketConversion extends Model
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
        'summary' => 'string',
        'ticketId' => 'integer',
    ];
}
