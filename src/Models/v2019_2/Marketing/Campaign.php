<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Campaign Version v2019_2
 * 
 * Model for Campaign
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\CampaignTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\CampaignSubTypeReference $subType
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\CampaignStatusReference $status
 * @property string $startDate
 * @property string $endDate
 * @property integer $locationId
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\MemberReference $member
 * @property boolean $inactive
 * @property integer $inactiveDaysAfterEnd
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\GroupReference $defaultGroup
 * @property integer $marketingManagerDefaultTrackId
 * @property integer $opportunityDefaultTrackId
 * @property integer $impressions
 * @property number $budgetRevenue
 * @property number $budgetCost
 * @property number $actualCost
 * @property number $budgetGrossMargin
 * @property number $budgetROI
 * @property number $actualRevenue
 * @property number $actualGrossMargin
 * @property number $actualROI
 * @property integer $emailsSent
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\CampaignTypeReference',
        'subType' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\CampaignSubTypeReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\CampaignStatusReference',
        'startDate' => 'string',
        'endDate' => 'string',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\MemberReference',
        'inactive' => 'boolean',
        'inactiveDaysAfterEnd' => 'integer',
        'notes' => 'string',
        'defaultGroup' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\GroupReference',
        'marketingManagerDefaultTrackId' => 'integer',
        'opportunityDefaultTrackId' => 'integer',
        'impressions' => 'integer',
        'budgetRevenue' => 'number',
        'budgetCost' => 'number',
        'actualCost' => 'number',
        'budgetGrossMargin' => 'number',
        'budgetROI' => 'number',
        'actualRevenue' => 'number',
        'actualGrossMargin' => 'number',
        'actualROI' => 'number',
        'emailsSent' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata',
    ];
}
