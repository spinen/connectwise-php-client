<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GenericBoardTeamReference Version v2019_1
 *
 * Model for GenericBoardTeamReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property boolean $isProjectTeamFlag
 * @property integer $id
 * @property string $name
 */
class GenericBoardTeamReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'id' => 'integer',
        'isProjectTeamFlag' => 'boolean',
        'name' => 'string',
    ];
}
