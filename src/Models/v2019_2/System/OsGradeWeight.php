<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OsGradeWeight Version v2019_2
 *
 * Model for OsGradeWeight
 *
 * @property Metadata $_info
 * @property float $osGradeWeight
 * @property int $id
 * @property string $osName
 */
class OsGradeWeight extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'osGradeWeight' => 'float',
        'osName' => 'string',
    ];
}
