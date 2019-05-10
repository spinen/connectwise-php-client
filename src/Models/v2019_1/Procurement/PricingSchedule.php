<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PricingSchedule Version v2019_1
 *
 * Model for PricingSchedule
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CurrencyReference $currency
 * @property array $companies
 * @property boolean $setAllCompaniesFlag
 * @property boolean $removeAllCompaniesFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 */
class PricingSchedule extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CurrencyReference',
        'companies' => 'array',
        'setAllCompaniesFlag' => 'boolean',
        'removeAllCompaniesFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
    ];
}
