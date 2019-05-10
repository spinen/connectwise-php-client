<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StandardNoteInfo Version v2019_1
 *
 * Model for StandardNoteInfo
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2019_1\System\BoardReference',
        'contents' => 'string',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'name' => 'string',
    ];
}
