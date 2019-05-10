<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SystemDepartmentReference Version v2018_5
 *
 * Model for SystemDepartmentReference
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Time\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
