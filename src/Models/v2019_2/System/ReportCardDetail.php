<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ReportCardDetail Version v2019_2
 *
 * Model for ReportCardDetail
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\KPIReference $kpi
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\System\ReportCardReference $reportCard
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
        'id' => 'integer',
        'kpi' => 'Spinen\ConnectWise\Models\v2019_2\System\KPIReference',
        'reportCard' => 'Spinen\ConnectWise\Models\v2019_2\System\ReportCardReference',
        'sortOrder' => 'integer',
    ];
}
