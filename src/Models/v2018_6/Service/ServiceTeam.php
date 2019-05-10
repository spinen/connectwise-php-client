<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTeam Version v2018_6
 *
 * Model for ServiceTeam
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Service\MemberReference $leader
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Service\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_6\Service\SystemLocationReference $location
 * @property boolean $deleteNotifyFlag
 * @property integer $id
 * @property string $name
 */
class ServiceTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
        'deleteNotifyFlag' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\Service\SystemDepartmentReference',
        'id' => 'integer',
        'leader' => 'Spinen\ConnectWise\Models\v2018_6\Service\MemberReference',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\Service\SystemLocationReference',
        'name' => 'string',
    ];
}
