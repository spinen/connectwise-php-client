<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ReportCardDetail Version v2018_4
 *
 * Model for ReportCardDetail
 *
 * @property KPIReference $kpi
 * @property Metadata $_info
 * @property ReportCardReference $reportCard
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'kpi' => KPIReference::class,
        'reportCard' => ReportCardReference::class,
        'sortOrder' => 'integer'
    ];
}
