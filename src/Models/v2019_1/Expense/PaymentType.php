<?php

namespace Spinen\ConnectWise\Models\v2019_1\Expense;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PaymentType Version v2019_1
 *
 * Model for PaymentType
 *
 * @property ClassificationReference $classification
 * @property Metadata $_info
 * @property boolean $companyFlag
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $name
 */
class PaymentType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'classification' => ClassificationReference::class,
        'companyFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string'
    ];
}
