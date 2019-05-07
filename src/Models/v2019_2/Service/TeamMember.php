<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TeamMember
 *
 * @property integer $id
 * @property boolean $teamLeaderFlag
 */
class TeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'teamLeaderFlag' => 'boolean',
    ];
}
