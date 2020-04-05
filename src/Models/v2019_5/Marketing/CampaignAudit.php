<?php

namespace Spinen\ConnectWise\Models\v2019_5\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignAudit Version v2019_5
 *
 * Model for CampaignAudit
 *
 * @property GroupReference $group
 * @property integer $campaignId
 * @property integer $documentsCreated
 * @property integer $emailsSent
 * @property integer $emailsUnsent
 * @property integer $id
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
        'id' => 'integer'
    ];
}
