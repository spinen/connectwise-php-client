<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CurrencyReference Version v2019_5
 *
 * Model for CurrencyReference
 *
 * @property Metadata $_info
 * @property int $id
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'isoCode' => 'string',
        'name' => 'string',
        'symbol' => 'string',
    ];
}
