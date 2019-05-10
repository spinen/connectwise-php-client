<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToProjectConversion Version v2019_1
 *
 * Model for OpportunityToProjectConversion
 *
 * @property MemberReference $manager
 * @property ProjectBoardReference $board
 * @property ProjectStatusReference $status
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
        'board' => ProjectBoardReference::class,
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
        'manager' => MemberReference::class,
        'name' => 'string',
        'projectId' => 'integer',
        'status' => ProjectStatusReference::class,
    ];
}
