<?php

namespace Spinen\ConnectWise\Models\v2018_6\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Campaign Version v2018_6
 *
 * Model for Campaign
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Marketing\CampaignTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_6\Marketing\CampaignSubTypeReference $subType
 * @property Spinen\ConnectWise\Models\v2018_6\Marketing\CampaignStatusReference $status
 * @property Carbon\Carbon $startDate
 * @property Carbon\Carbon $endDate
 * @property integer $locationId
 * @property Spinen\ConnectWise\Models\v2018_6\Marketing\MemberReference $member
 * @property boolean $inactive
 * @property integer $inactiveDaysAfterEnd
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2018_6\Marketing\GroupReference $defaultGroup
 * @property integer $marketingManagerDefaultTrackId
 * @property integer $opportunityDefaultTrackId
 * @property integer $impressions
 * @property float $budgetRevenue
 * @property float $budgetCost
 * @property float $actualCost
 * @property float $budgetGrossMargin
 * @property float $budgetROI
 * @property float $actualRevenue
 * @property float $actualGrossMargin
 * @property float $actualROI
 * @property integer $emailsSent
 * @property Spinen\ConnectWise\Models\v2018_6\Marketing\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Marketing\CampaignTypeReference',
        'subType' => 'Spinen\ConnectWise\Models\v2018_6\Marketing\CampaignSubTypeReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Marketing\CampaignStatusReference',
        'startDate' => 'Carbon\Carbon',
        'endDate' => 'Carbon\Carbon',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Marketing\MemberReference',
        'inactive' => 'boolean',
        'inactiveDaysAfterEnd' => 'integer',
        'notes' => 'string',
        'defaultGroup' => 'Spinen\ConnectWise\Models\v2018_6\Marketing\GroupReference',
        'marketingManagerDefaultTrackId' => 'integer',
        'opportunityDefaultTrackId' => 'integer',
        'impressions' => 'integer',
        'budgetRevenue' => 'float',
        'budgetCost' => 'float',
        'actualCost' => 'float',
        'budgetGrossMargin' => 'float',
        'budgetROI' => 'float',
        'actualRevenue' => 'float',
        'actualGrossMargin' => 'float',
        'actualROI' => 'float',
        'emailsSent' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Marketing\Metadata',
    ];
}
