<?php

namespace Spinen\ConnectWise\Models\v2019_3\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignAudit Version v2019_3
 *
 * Model for CampaignAudit
 *
 * @property integer $id
 * @property integer $emailsSent
 * @property integer $emailsUnsent
 * @property integer $documentsCreated
 * @property string $emailSubject
 * @property Spinen\ConnectWise\Models\v2019_3\Marketing\GroupReference $group
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
        'group' => 'Spinen\ConnectWise\Models\v2019_3\Marketing\GroupReference',
        'campaignId' => 'integer',
        'createdBy' => 'string',
        'dateCreated' => 'string',
    ];
}
