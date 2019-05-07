<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StandardNoteInfo
 *
 * @property integer $id
 * @property string $name
 * @property string $contents
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
    ];
}
