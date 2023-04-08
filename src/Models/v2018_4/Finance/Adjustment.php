<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Adjustment Version v2018_4
 *
 * Model for Adjustment
 *
 * @property Carbon $effectiveDate
 * @property Metadata $_info
 * @property array $customFields
 * @property float $amount
 * @property int $agreementId
 * @property int $id
 * @property string $description
 */
class Adjustment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreementId' => 'integer',
        'amount' => 'float',
        'customFields' => 'array',
        'description' => 'string',
        'effectiveDate' => Carbon::class,
        'id' => 'integer',
    ];
}
