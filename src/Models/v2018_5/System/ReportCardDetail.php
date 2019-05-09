<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ReportCardDetail Version v2018_5
 * 
 * Model for ReportCardDetail
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\System\KPIReference $kpi
 * @property integer $sortOrder
 * @property Spinen\ConnectWise\Models\v2018_5\System\ReportCardReference $reportCard
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
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
        'kpi' => 'Spinen\ConnectWise\Models\v2018_5\System\KPIReference',
        'sortOrder' => 'integer',
        'reportCard' => 'Spinen\ConnectWise\Models\v2018_5\System\ReportCardReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
