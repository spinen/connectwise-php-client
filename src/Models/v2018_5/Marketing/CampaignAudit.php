<?php

namespace Spinen\ConnectWise\Models\v2018_5\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignAudit Version v2018_5
 *
 * Model for CampaignAudit
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Marketing\GroupReference $group
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
        'group' => 'Spinen\ConnectWise\Models\v2018_5\Marketing\GroupReference',
        'id' => 'integer',
    ];
}
