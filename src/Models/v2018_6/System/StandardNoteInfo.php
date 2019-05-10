<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StandardNoteInfo Version v2018_6
 *
 * Model for StandardNoteInfo
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference $location
 * @property integer $id
 * @property string $contents
 * @property string $name
 */
class StandardNoteInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2018_6\System\BoardReference',
        'contents' => 'string',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference',
        'name' => 'string',
    ];
}
