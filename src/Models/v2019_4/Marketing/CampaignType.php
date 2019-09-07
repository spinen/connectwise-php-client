<?php

namespace Spinen\ConnectWise\Models\v2019_4\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignType Version v2019_4
 *
 * Model for CampaignType
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string'
    ];
}
