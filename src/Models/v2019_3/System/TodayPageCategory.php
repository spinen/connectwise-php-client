<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TodayPageCategory Version v2019_3
 *
 * Model for TodayPageCategory
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference $location
 * @property integer $id
 * @property integer $sortOrder
 * @property string $name
 */
class TodayPageCategory extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
