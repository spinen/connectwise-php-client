<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OsGradeWeight
 *
 * @property integer $id
 * @property double $osGradeWeight
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
        'id' => 'integer',
        'osGradeWeight' => 'double',
        'osName' => 'string',
    ];
}
