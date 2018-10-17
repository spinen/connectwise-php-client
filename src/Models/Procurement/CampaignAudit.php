<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

class CampaignAudit extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'emailsSent' => 'integer',
        'emailsUnsent' => 'integer',
        'documentsCreated' => 'integer',
        'emailSubject' => 'string',
        'campaignId' => 'integer',
        'createdBy' => 'string',
        'dateCreated' => 'string',
    ];
}
