<?php

namespace Spinen\ConnectWise\Models\v2018_6\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CurrencyReference Version v2018_6
 *
 * Model for CurrencyReference
 *
 * @property integer $id
 * @property string $symbol
 * @property string $isoCode
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\Metadata $_info
 */
class CurrencyReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'symbol' => 'string',
        'isoCode' => 'string',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Expense\Metadata',
    ];
}
