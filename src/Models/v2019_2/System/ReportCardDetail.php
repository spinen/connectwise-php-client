<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ReportCardDetail Version v2019_2
 * 
 * Model for ReportCardDetail
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\System\KPIReference $kpi
 * @property integer $sortOrder
 * @property Spinen\ConnectWise\Models\v2019_2\System\ReportCardReference $reportCard
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
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
        'kpi' => 'Spinen\ConnectWise\Models\v2019_2\System\KPIReference',
        'sortOrder' => 'integer',
        'reportCard' => 'Spinen\ConnectWise\Models\v2019_2\System\ReportCardReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
