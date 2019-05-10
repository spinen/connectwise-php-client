<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OsGradeWeight Version v2019_3
 * 
 * Model for OsGradeWeight
 *
 * @property integer $id
 * @property float $osGradeWeight
 * @property string $osName
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
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
        'osGradeWeight' => 'float',
        'osName' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
