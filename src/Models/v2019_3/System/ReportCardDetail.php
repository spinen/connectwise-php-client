<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ReportCardDetail Version v2019_3
 *
 * Model for ReportCardDetail
 *
 * @property KPIReference $kpi
 * @property Metadata $_info
 * @property ReportCardReference $reportCard
 * @property int $id
 * @property int $sortOrder
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
        'sortOrder' => 'integer',
    ];
}
