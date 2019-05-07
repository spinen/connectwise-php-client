<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PaymentType
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $companyFlag
 */
class PaymentType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'companyFlag' => 'boolean',
    ];
}
