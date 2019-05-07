<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardTeamMember
 *
 * @property integer $id
 */
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
