<?php

namespace Spinen\ConnectWise\Models\v2018_6\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Campaign Version v2018_6
 *
 * Model for Campaign
 *
 * @property CampaignStatusReference $status
 * @property CampaignSubTypeReference $subType
 * @property CampaignTypeReference $type
 * @property Carbon\Carbon $endDate
 * @property Carbon\Carbon $startDate
 * @property GroupReference $defaultGroup
 * @property MemberReference $member
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'actualCost' => 'float',
        'actualGrossMargin' => 'float',
        'actualROI' => 'float',
        'actualRevenue' => 'float',
        'budgetCost' => 'float',
        'budgetGrossMargin' => 'float',
        'budgetROI' => 'float',
        'budgetRevenue' => 'float',
        'defaultGroup' => GroupReference::class,
        'emailsSent' => 'integer',
        'endDate' => Carbon\Carbon::class,
        'id' => 'integer',
        'impressions' => 'integer',
        'inactive' => 'boolean',
        'inactiveDaysAfterEnd' => 'integer',
        'locationId' => 'integer',
        'marketingManagerDefaultTrackId' => 'integer',
        'member' => MemberReference::class,
        'name' => 'string',
        'notes' => 'string',
        'opportunityDefaultTrackId' => 'integer',
        'startDate' => Carbon\Carbon::class,
        'status' => CampaignStatusReference::class,
        'subType' => CampaignSubTypeReference::class,
        'type' => CampaignTypeReference::class,
    ];
}
