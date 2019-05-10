<?php

namespace Spinen\ConnectWise\Models\v2019_1\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignType Version v2019_1
 *
 * Model for CampaignType
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Marketing\Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $name
 */
class CampaignType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Marketing\Metadata',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
    ];
}
