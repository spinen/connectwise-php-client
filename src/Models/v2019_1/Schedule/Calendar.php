<?php

namespace Spinen\ConnectWise\Models\v2019_1\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Calendar
 *
 * @property string $type
 * @property integer $count
 * @property integer $id
 * @property string $description
 * @property string $hyperlink
 */
class Calendar extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'type' => 'string',
        'count' => 'integer',
        'id' => 'integer',
        'description' => 'string',
        'hyperlink' => 'string',
    ];
}