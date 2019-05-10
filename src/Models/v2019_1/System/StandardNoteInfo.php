<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StandardNoteInfo Version v2019_1
 *
 * Model for StandardNoteInfo
 *
 * @property integer $id
 * @property string $name
 * @property string $contents
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\System\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 */
class StandardNoteInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'contents' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference',
        'board' => 'Spinen\ConnectWise\Models\v2019_1\System\BoardReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
