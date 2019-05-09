<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OsGradeWeight Version v2019_2
 * 
 * Model for OsGradeWeight
 *
 * @property integer $id
 * @property number $osGradeWeight
 * @property string $osName
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class OsGradeWeight extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'osGradeWeight' => 'number',
        'osName' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
