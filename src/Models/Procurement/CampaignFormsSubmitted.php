<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

class CampaignFormsSubmitted extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'campaignId' => 'integer',
        'contactId' => 'integer',
        'dateSubmitted' => 'carbon',
        'url' => 'string',
        'queryString' => 'string',
        'pageType' => 'string',
        'pageSubType' => 'string',
        'topic' => 'string',
        'version' => 'string',
        'status' => 'string',
    ];
}
