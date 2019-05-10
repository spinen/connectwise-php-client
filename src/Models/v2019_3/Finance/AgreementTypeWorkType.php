<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkType Version v2019_3
 *
 * Model for AgreementTypeWorkType
 *
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $endingDate
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WorkTypeReference $workType
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'billTime' => 'string',
        'effectiveDate' => 'Carbon\Carbon',
        'endingDate' => 'Carbon\Carbon',
        'hoursMax' => 'float',
        'hoursMin' => 'float',
        'id' => 'integer',
        'limitTo' => 'float',
        'overageRate' => 'float',
        'overageRateType' => 'string',
        'rate' => 'float',
        'rateType' => 'string',
        'roundBillHours' => 'float',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Finance\AgreementTypeReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WorkTypeReference',
    ];
}
