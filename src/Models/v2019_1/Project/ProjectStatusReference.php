<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectStatusReference Version v2019_1
 *
 * Model for ProjectStatusReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Project\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ProjectStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Project\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
