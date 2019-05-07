<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PricingDetail
 *
 * @property integer $id
 * @property carbon $startDate
 * @property carbon $endDate
 * @property boolean $noEndDate
 */
class PricingDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'startDate' => 'carbon',
        'endDate' => 'carbon',
        'noEndDate' => 'boolean',
    ];
}
