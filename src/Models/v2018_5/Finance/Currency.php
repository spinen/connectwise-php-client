<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Currency
 *
 * @property integer $id
 * @property string $currencyIdentifier
 * @property string $name
 * @property string $symbol
 * @property boolean $displayIdFlag
 * @property boolean $displaySymbolFlag
 * @property string $isoCode
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
    ];
}
