<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectStatus Version v2019_2
 *
 * Model for ProjectStatus
 *
 * @property Metadata $_info
 * @property StatusIndicatorReference $statusIndicator
 * @property bool $closedFlag
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property bool $noTimeFlag
 * @property int $id
 * @property string $customStatusIndicatorName
 * @property string $name
 */
class ProjectStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'closedFlag' => 'boolean',
        'customStatusIndicatorName' => 'string',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'noTimeFlag' => 'boolean',
        'statusIndicator' => StatusIndicatorReference::class,
    ];
}
