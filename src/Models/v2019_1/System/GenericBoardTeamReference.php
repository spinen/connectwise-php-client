<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GenericBoardTeamReference Version v2019_1
 *
 * Model for GenericBoardTeamReference
 *
 * @property Metadata $_info
 * @property bool $isProjectTeamFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'isProjectTeamFlag' => 'boolean',
        'name' => 'string',
    ];
}
