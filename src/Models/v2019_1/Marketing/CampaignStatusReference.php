<?php

namespace Spinen\ConnectWise\Models\v2019_1\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignStatusReference Version v2019_1
 *
 * Model for CampaignStatusReference
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
