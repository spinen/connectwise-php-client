<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GenericBoardTeamReference Version v2019_2
 *
 * Model for GenericBoardTeamReference
 *
 * @property integer $id
 * @property string $name
 * @property boolean $isProjectTeamFlag
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class GenericBoardTeamReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'isProjectTeamFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
