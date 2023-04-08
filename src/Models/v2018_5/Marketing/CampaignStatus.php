<?php

namespace Spinen\ConnectWise\Models\v2018_5\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignStatus Version v2018_5
 *
 * Model for CampaignStatus
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property int $id
 * @property string $name
 */
class CampaignStatus extends Model
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
        'inactiveFlag' => 'boolean',
        'name' => 'string',
    ];
}
