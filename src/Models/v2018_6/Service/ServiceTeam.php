<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTeam Version v2018_6
 *
 * Model for ServiceTeam
 *
 * @property MemberReference $leader
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
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
        '_info' => Metadata::class,
        'deleteNotifyFlag' => 'boolean',
        'department' => SystemDepartmentReference::class,
        'id' => 'integer',
        'leader' => MemberReference::class,
        'location' => SystemLocationReference::class,
        'name' => 'string'
    ];
}
