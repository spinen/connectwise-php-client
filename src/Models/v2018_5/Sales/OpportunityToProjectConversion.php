<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToProjectConversion Version v2018_5
 *
 * Model for OpportunityToProjectConversion
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference $manager
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ProjectBoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ProjectStatusReference $status
 * @property array $includeDocumentIds
 * @property array $includeNoteIds
 * @property array $includeProductIds
 * @property boolean $includeAllDocumentsFlag
 * @property boolean $includeAllNotesFlag
 * @property boolean $includeAllProductsFlag
 * @property integer $businessUnitId
 * @property integer $locationId
 * @property integer $projectId
 * @property string $estimatedEnd
 * @property string $estimatedStart
 * @property string $name
 */
class OpportunityToProjectConversion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ProjectBoardReference',
        'businessUnitId' => 'integer',
        'estimatedEnd' => 'string',
        'estimatedStart' => 'string',
        'includeAllDocumentsFlag' => 'boolean',
        'includeAllNotesFlag' => 'boolean',
        'includeAllProductsFlag' => 'boolean',
        'includeDocumentIds' => 'array',
        'includeNoteIds' => 'array',
        'includeProductIds' => 'array',
        'locationId' => 'integer',
        'manager' => 'Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference',
        'name' => 'string',
        'projectId' => 'integer',
        'status' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ProjectStatusReference',
    ];
}
