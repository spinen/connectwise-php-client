<?php

namespace Spinen\ConnectWise\Models\v2018_4\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PaymentMethodReference Version v2018_4
 *
 * Model for PaymentMethodReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Expense\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class PaymentMethodReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Expense\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
