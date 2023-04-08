<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToProjectConversion Version v2019_3
 *
 * Model for OpportunityToProjectConversion
 *
 * @property MemberReference $manager
 * @property ProjectBoardReference $board
 * @property ProjectStatusReference $status
 * @property array $includeDocumentIds
 * @property array $includeNoteIds
 * @property array $includeProductIds
 * @property bool $includeAllDocumentsFlag
 * @property bool $includeAllNotesFlag
 * @property bool $includeAllProductsFlag
 * @property int $businessUnitId
 * @property int $locationId
 * @property int $projectId
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
