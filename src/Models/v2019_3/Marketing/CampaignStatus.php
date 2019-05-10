<?php

namespace Spinen\ConnectWise\Models\v2019_3\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignStatus Version v2019_3
 *
 * Model for CampaignStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Marketing\Metadata $_info
 */
class CampaignStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Marketing\Metadata',
    ];
}
