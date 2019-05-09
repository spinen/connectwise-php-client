<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkType Version v2019_3
 * 
 * Model for AgreementTypeWorkType
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WorkTypeReference $workType
 * @property string $effectiveDate
 * @property string $endingDate
 * @property number $rate
 * @property string $rateType
 * @property string $billTime
 * @property number $hoursMin
 * @property number $hoursMax
 * @property number $roundBillHours
 * @property number $overageRate
 * @property string $overageRateType
 * @property number $limitTo
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 */
class AgreementTypeWorkType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Finance\AgreementTypeReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WorkTypeReference',
        'effectiveDate' => 'string',
        'endingDate' => 'string',
        'rate' => 'number',
        'rateType' => 'string',
        'billTime' => 'string',
        'hoursMin' => 'number',
        'hoursMax' => 'number',
        'roundBillHours' => 'number',
        'overageRate' => 'number',
        'overageRateType' => 'string',
        'limitTo' => 'number',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
    ];
}
