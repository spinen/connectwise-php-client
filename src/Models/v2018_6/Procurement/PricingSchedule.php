<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PricingSchedule Version v2018_6
 *
 * Model for PricingSchedule
 *
 * @property CurrencyReference $currency
 * @property Metadata $_info
 * @property array $companies
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $removeAllCompaniesFlag
 * @property boolean $setAllCompaniesFlag
 * @property integer $id
 * @property string $name
 */
class PricingSchedule extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'companies' => 'array',
        'currency' => CurrencyReference::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'removeAllCompaniesFlag' => 'boolean',
        'setAllCompaniesFlag' => 'boolean'
    ];
}
