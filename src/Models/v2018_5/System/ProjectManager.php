<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectManager Version v2018_5
 *
 * A list of Projects that the member is the project manager
 *
 * @property integer $count
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $reAssignToMember
 */
class ProjectManager extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
    ];
}
