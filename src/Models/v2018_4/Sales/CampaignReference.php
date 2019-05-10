<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignReference Version v2018_4
 *
 * Model for CampaignReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class CampaignReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Sales\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
