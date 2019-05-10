<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TodayPageCategory Version v2019_3
 *
 * Model for TodayPageCategory
 *
 * @property integer $id
 * @property string $name
 * @property integer $sortOrder
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 */
class TodayPageCategory extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'sortOrder' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
