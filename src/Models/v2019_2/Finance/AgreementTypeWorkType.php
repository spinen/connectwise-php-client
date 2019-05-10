<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkType Version v2019_2
 *
 * Model for AgreementTypeWorkType
 *
 * @property AgreementTypeReference $type
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $endingDate
 * @property Metadata $_info
 * @property WorkTypeReference $workType
 * @property float $hoursMax
 * @property float $hoursMin
 * @property float $limitTo
 * @property float $overageRate
 * @property float $rate
 * @property float $roundBillHours
 * @property integer $id
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
        'effectiveDate' => Carbon\Carbon::class,
        'endingDate' => Carbon\Carbon::class,
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
