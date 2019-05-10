<?php

namespace Spinen\ConnectWise\Models\v2018_5\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Campaign Version v2018_5
 *
 * Model for Campaign
 *
 * @property Carbon\Carbon $endDate
 * @property Carbon\Carbon $startDate
 * @property Spinen\ConnectWise\Models\v2018_5\Marketing\CampaignStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_5\Marketing\CampaignSubTypeReference $subType
 * @property Spinen\ConnectWise\Models\v2018_5\Marketing\CampaignTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Marketing\GroupReference $defaultGroup
 * @property Spinen\ConnectWise\Models\v2018_5\Marketing\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Marketing\Metadata $_info
 * @property boolean $inactive
 * @property float $actualCost
 * @property float $actualGrossMargin
 * @property float $actualROI
 * @property float $actualRevenue
 * @property float $budgetCost
 * @property float $budgetGrossMargin
 * @property float $budgetROI
 * @property float $budgetRevenue
 * @property integer $emailsSent
 * @property integer $id
 * @property integer $impressions
 * @property integer $inactiveDaysAfterEnd
 * @property integer $locationId
 * @property integer $marketingManagerDefaultTrackId
 * @property integer $opportunityDefaultTrackId
 * @property string $name
 * @property string $notes
 */
class Campaign extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Marketing\Metadata',
        'actualCost' => 'float',
        'actualGrossMargin' => 'float',
        'actualROI' => 'float',
        'actualRevenue' => 'float',
        'budgetCost' => 'float',
        'budgetGrossMargin' => 'float',
        'budgetROI' => 'float',
        'budgetRevenue' => 'float',
        'defaultGroup' => 'Spinen\ConnectWise\Models\v2018_5\Marketing\GroupReference',
        'emailsSent' => 'integer',
        'endDate' => 'Carbon\Carbon',
        'id' => 'integer',
        'impressions' => 'integer',
        'inactive' => 'boolean',
        'inactiveDaysAfterEnd' => 'integer',
        'locationId' => 'integer',
        'marketingManagerDefaultTrackId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Marketing\MemberReference',
        'name' => 'string',
        'notes' => 'string',
        'opportunityDefaultTrackId' => 'integer',
        'startDate' => 'Carbon\Carbon',
        'status' => 'Spinen\ConnectWise\Models\v2018_5\Marketing\CampaignStatusReference',
        'subType' => 'Spinen\ConnectWise\Models\v2018_5\Marketing\CampaignSubTypeReference',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Marketing\CampaignTypeReference',
    ];
}
