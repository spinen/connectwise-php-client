<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CurrencyReference Version v2019_2
 *
 * Model for CurrencyReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Project\Metadata $_info
 * @property integer $id
 * @property string $isoCode
 * @property string $name
 * @property string $symbol
 */
class CurrencyReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Project\Metadata',
        'id' => 'integer',
        'isoCode' => 'string',
        'name' => 'string',
        'symbol' => 'string',
    ];
}
