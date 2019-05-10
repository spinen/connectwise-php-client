<?php

namespace Spinen\ConnectWise\Models\v2019_3\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignStatusReference Version v2019_3
 *
 * Model for CampaignStatusReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Marketing\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class CampaignStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Marketing\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
