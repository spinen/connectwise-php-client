<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class StandardNoteInfo Version v2019_4
 *
 * Model for StandardNoteInfo
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
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
        '_info' => Metadata::class,
        'board' => BoardReference::class,
        'contents' => 'string',
        'department' => SystemDepartmentReference::class,
        'id' => 'integer',
        'location' => SystemLocationReference::class,
        'name' => 'string'
    ];
}
