<?php

namespace Spinen\ConnectWise\Models\v2019_3\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignLinksClicked
 *
 * @property integer $id
 * @property integer $campaignId
 * @property integer $contactId
 * @property carbon $dateClicked
 * @property string $url
 * @property string $queryString
 */
class CampaignLinksClicked extends Model
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
        'dateClicked' => 'carbon',
        'url' => 'string',
        'queryString' => 'string',
    ];
}
