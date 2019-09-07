<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Currency Version v2019_4
 *
 * Model for Currency
 *
 * @property CurrencyCodeReference $currencyCode
 * @property Metadata $_info
 * @property boolean $displayIdFlag
 * @property boolean $displaySymbolFlag
 * @property boolean $negativeParenthesesFlag
 * @property boolean $rightAlign
 * @property integer $id
 * @property integer $numberOfDecimals
 * @property string $currencyIdentifier
 * @property string $decimalSeparator
 * @property string $name
 * @property string $reportFormat
 * @property string $symbol
 * @property string $thousandsSeparator
 */
class Currency extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'currencyCode' => CurrencyCodeReference::class,
        'currencyIdentifier' => 'string',
        'decimalSeparator' => 'string',
        'displayIdFlag' => 'boolean',
        'displaySymbolFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'negativeParenthesesFlag' => 'boolean',
        'numberOfDecimals' => 'integer',
        'reportFormat' => 'string',
        'rightAlign' => 'boolean',
        'symbol' => 'string',
        'thousandsSeparator' => 'string'
    ];
}
