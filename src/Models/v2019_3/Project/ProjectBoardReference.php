<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardReference Version v2019_3
 *
 * Model for ProjectBoardReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Project\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ProjectBoardReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Project\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
