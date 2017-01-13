<?php

namespace Spinen\ConnectWise\Models\Marketing;

use Spinen\ConnectWise\Support\Model;

class CampaignEmailsOpened extends Model
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
        'dateOpened' => 'carbon',
    ];
}
