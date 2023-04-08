<?php

namespace Spinen\ConnectWise\Models\v2018_5\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignAudit Version v2018_5
 *
 * Model for CampaignAudit
 *
 * @property GroupReference $group
 * @property int $campaignId
 * @property int $documentsCreated
 * @property int $emailsSent
 * @property int $emailsUnsent
 * @property int $id
 * @property string $createdBy
 * @property string $dateCreated
 * @property string $emailSubject
 */
class CampaignAudit extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'campaignId' => 'integer',
        'createdBy' => 'string',
        'dateCreated' => 'string',
        'documentsCreated' => 'integer',
        'emailSubject' => 'string',
        'emailsSent' => 'integer',
        'emailsUnsent' => 'integer',
        'group' => GroupReference::class,
        'id' => 'integer',
    ];
}
