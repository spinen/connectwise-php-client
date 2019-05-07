<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LegacyCampaignSubType
 *
 * @property integer $id
 * @property string $name
 */
class LegacyCampaignSubType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
    ];
}
