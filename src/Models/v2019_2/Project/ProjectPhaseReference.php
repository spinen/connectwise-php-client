<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectPhaseReference Version v2019_2
 *
 * Model for ProjectPhaseReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Project\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ProjectPhaseReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Project\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
