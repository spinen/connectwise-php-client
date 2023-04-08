<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectRoleReference Version v2019_3
 *
 * Model for ProjectRoleReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $identifier
 */
class ProjectRoleReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
    ];
}
