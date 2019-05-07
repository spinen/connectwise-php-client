<?php

namespace Spinen\ConnectWise\Models\v2019_3\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignAudit
 *
 * @property integer $id
 * @property integer $emailsSent
 * @property integer $emailsUnsent
 * @property integer $documentsCreated
 * @property string $emailSubject
 * @property integer $campaignId
 * @property string $createdBy
 * @property string $dateCreated
 */
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
