<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OsGradeWeight Version v2018_5
 *
 * Model for OsGradeWeight
 *
 * @property integer $id
 * @property float $osGradeWeight
 * @property string $osName
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
