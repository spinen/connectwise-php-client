<?php

namespace Spinen\ConnectWise\Models\v2018_4\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignSubType Version v2018_4
 *
 * Model for CampaignSubType
 *
 * @property CampaignTypeReference $type
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class CampaignSubType extends Model
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
        'type' => CampaignTypeReference::class,
    ];
}
