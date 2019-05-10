<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToProjectConversion Version v2018_6
 *
 * Model for OpportunityToProjectConversion
 *
 * @property integer $projectId
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\ProjectStatusReference $status
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\ProjectBoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\MemberReference $manager
 * @property string $estimatedStart
 * @property string $estimatedEnd
 * @property boolean $includeAllNotesFlag
 * @property boolean $includeAllDocumentsFlag
 * @property boolean $includeAllProductsFlag
 * @property array $includeNoteIds
 * @property array $includeDocumentIds
 * @property array $includeProductIds
 */
class OpportunityToProjectConversion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'projectId' => 'integer',
        'name' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Sales\ProjectStatusReference',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'board' => 'Spinen\ConnectWise\Models\v2018_6\Sales\ProjectBoardReference',
        'manager' => 'Spinen\ConnectWise\Models\v2018_6\Sales\MemberReference',
        'estimatedStart' => 'string',
        'estimatedEnd' => 'string',
        'includeAllNotesFlag' => 'boolean',
        'includeAllDocumentsFlag' => 'boolean',
        'includeAllProductsFlag' => 'boolean',
        'includeNoteIds' => 'array',
        'includeDocumentIds' => 'array',
        'includeProductIds' => 'array',
    ];
}
