<?php

namespace Spinen\ConnectWise\Models\v2019_1\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PaymentType Version v2019_1
 *
 * Model for PaymentType
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\ClassificationReference $classification
 * @property boolean $defaultFlag
 * @property boolean $companyFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\Metadata $_info
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
        'classification' => 'Spinen\ConnectWise\Models\v2019_1\Expense\ClassificationReference',
        'defaultFlag' => 'boolean',
        'companyFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Expense\Metadata',
    ];
}
