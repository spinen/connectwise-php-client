<?php

namespace Spinen\ConnectWise\Models\v2018_4\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Campaign
 *
 * @property integer $id
 * @property string $name
 * @property carbon $startDate
 * @property carbon $endDate
 * @property integer $locationId
 * @property boolean $inactive
 * @property integer $inactiveDaysAfterEnd
 * @property string $notes
 * @property integer $marketingManagerDefaultTrackId
 * @property integer $opportunityDefaultTrackId
 * @property integer $impressions
 * @property double $budgetRevenue
 * @property double $budgetCost
 * @property double $actualCost
 * @property double $budgetGrossMargin
 * @property double $budgetROI
 * @property double $actualRevenue
 * @property double $actualGrossMargin
 * @property double $actualROI
 * @property integer $emailsSent
 */
class Campaign extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'startDate' => 'carbon',
        'endDate' => 'carbon',
        'locationId' => 'integer',
        'inactive' => 'boolean',
        'inactiveDaysAfterEnd' => 'integer',
        'notes' => 'string',
        'marketingManagerDefaultTrackId' => 'integer',
        'opportunityDefaultTrackId' => 'integer',
        'impressions' => 'integer',
        'budgetRevenue' => 'double',
        'budgetCost' => 'double',
        'actualCost' => 'double',
        'budgetGrossMargin' => 'double',
        'budgetROI' => 'double',
        'actualRevenue' => 'double',
        'actualGrossMargin' => 'double',
        'actualROI' => 'double',
        'emailsSent' => 'integer',
    ];
}
