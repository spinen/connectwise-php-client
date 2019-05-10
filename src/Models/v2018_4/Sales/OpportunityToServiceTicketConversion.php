<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToServiceTicketConversion Version v2018_4
 *
 * Model for OpportunityToServiceTicketConversion
 *
 * @property integer $ticketId
 * @property string $summary
 * @property boolean $includeAllNotesFlag
 * @property boolean $includeAllDocumentsFlag
 * @property boolean $includeAllProductsFlag
 * @property array $includeNoteIds
 * @property array $includeDocumentIds
 * @property array $includeProductIds
 */
class OpportunityToServiceTicketConversion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'ticketId' => 'integer',
        'summary' => 'string',
        'includeAllNotesFlag' => 'boolean',
        'includeAllDocumentsFlag' => 'boolean',
        'includeAllProductsFlag' => 'boolean',
        'includeNoteIds' => 'array',
        'includeDocumentIds' => 'array',
        'includeProductIds' => 'array',
    ];
}
