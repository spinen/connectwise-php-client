<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeToReference Version v2019_2
 *
 * Model for ChargeToReference
 *
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Metadata $_info
 */
class ChargeToReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Metadata',
    ];
}
