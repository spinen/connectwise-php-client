<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StandardNoteInfo Version v2019_3
 * 
 * Model for StandardNoteInfo
 *
 * @property integer $id
 * @property string $name
 * @property string $contents
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_3\System\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
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
        'location' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemDepartmentReference',
        'board' => 'Spinen\ConnectWise\Models\v2019_3\System\BoardReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
