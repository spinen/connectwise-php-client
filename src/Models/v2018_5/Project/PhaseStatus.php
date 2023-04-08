<?php

namespace Spinen\ConnectWise\Models\v2018_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PhaseStatus Version v2018_5
 *
 * Model for PhaseStatus
 *
 * @property Metadata $_info
 * @property StatusIndicatorReference $statusIndicator
 * @property array $boardAssociationIds
 * @property bool $closedFlag
 * @property bool $collapsedFlag
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property int $id
 * @property string $customStatusIndicatorName
 * @property string $name
 */
class PhaseStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'boardAssociationIds' => 'array',
        'closedFlag' => 'boolean',
        'collapsedFlag' => 'boolean',
        'customStatusIndicatorName' => 'string',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'statusIndicator' => StatusIndicatorReference::class,
    ];
}
