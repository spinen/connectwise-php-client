<?php

namespace Spinen\ConnectWise\Models\v2019_5\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToServiceTicketConversion Version v2019_5
 *
 * Model for OpportunityToServiceTicketConversion
 *
 * @property array $includeDocumentIds
 * @property array $includeNoteIds
 * @property array $includeProductIds
 * @property boolean $includeAllDocumentsFlag
 * @property boolean $includeAllNotesFlag
 * @property boolean $includeAllProductsFlag
 * @property integer $ticketId
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
        'ticketId' => 'integer'
    ];
}
