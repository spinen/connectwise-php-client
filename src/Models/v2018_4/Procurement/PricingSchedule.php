<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PricingSchedule Version v2018_4
 *
 * Model for PricingSchedule
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
        'companies' => 'array',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\CurrencyReference',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'removeAllCompaniesFlag' => 'boolean',
        'setAllCompaniesFlag' => 'boolean',
    ];
}
