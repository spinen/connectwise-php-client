<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignSubType Version v2019_2
 *
 * Model for CampaignSubType
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\CampaignTypeReference $type
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata $_info
 */
class CampaignSubType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\CampaignTypeReference',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata',
    ];
}
