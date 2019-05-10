<?php

namespace Spinen\ConnectWise\Models\v2018_5\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignType Version v2018_5
 *
 * Model for CampaignType
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Marketing\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Marketing\Metadata',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
    ];
}
