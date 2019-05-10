<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Adjustment Version v2018_4
 *
 * Model for Adjustment
 *
 * @property integer $id
 * @property float $amount
 * @property string $description
 * @property Carbon\Carbon $effectiveDate
 * @property integer $agreementId
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 * @property array $customFields
 */
class Adjustment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'amount' => 'float',
        'description' => 'string',
        'effectiveDate' => 'Carbon\Carbon',
        'agreementId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
        'customFields' => 'array',
    ];
}
