<?php

namespace Spinen\ConnectWise\Models\Project;

use Spinen\ConnectWise\Support\Model;

class ProjectBoardTeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}
