<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ReportCardDetail
 *
 * @property integer $id
 * @property integer $sortOrder
 */
class ReportCardDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sortOrder' => 'integer',
    ];
}
