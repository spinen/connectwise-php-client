<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SystemDepartmentReference Version v2019_3
 *
 * Model for SystemDepartmentReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Project\Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class SystemDepartmentReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Project\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
