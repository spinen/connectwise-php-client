<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PricingSchedule Version v2019_3
 *
 * Model for PricingSchedule
 *
 * @property CurrencyReference $currency
 * @property Metadata $_info
 * @property array $companies
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property bool $removeAllCompaniesFlag
 * @property bool $setAllCompaniesFlag
 * @property int $id
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
        'setAllCompaniesFlag' => 'boolean',
    ];
}
