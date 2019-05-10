<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Currency Version v2019_3
 *
 * Model for Currency
 *
 * @property integer $id
 * @property string $currencyIdentifier
 * @property string $name
 * @property string $symbol
 * @property boolean $displayIdFlag
 * @property boolean $displaySymbolFlag
 * @property string $isoCode
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 */
class Currency extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'currencyIdentifier' => 'string',
        'name' => 'string',
        'symbol' => 'string',
        'displayIdFlag' => 'boolean',
        'displaySymbolFlag' => 'boolean',
        'isoCode' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
    ];
}
