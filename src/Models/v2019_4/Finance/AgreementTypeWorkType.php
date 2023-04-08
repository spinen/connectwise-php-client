<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkType Version v2019_4
 *
 * Model for AgreementTypeWorkType
 *
 * @property AgreementTypeReference $type
 * @property Carbon $effectiveDate
 * @property Carbon $endingDate
 * @property Metadata $_info
 * @property WorkTypeReference $workType
 * @property float $hoursMax
 * @property float $hoursMin
 * @property float $limitTo
 * @property float $overageRate
 * @property float $rate
 * @property float $roundBillHours
 * @property int $id
 * @property string $billTime
 * @property string $overageRateType
 * @property string $rateType
 */
class AgreementTypeWorkType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'billTime' => 'string',
        'effectiveDate' => Carbon::class,
        'endingDate' => Carbon::class,
        'hoursMax' => 'float',
        'hoursMin' => 'float',
        'id' => 'integer',
        'limitTo' => 'float',
        'overageRate' => 'float',
        'overageRateType' => 'string',
        'rate' => 'float',
        'rateType' => 'string',
        'roundBillHours' => 'float',
        'type' => AgreementTypeReference::class,
        'workType' => WorkTypeReference::class,
    ];
}
