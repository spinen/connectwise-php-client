<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkType Version v2018_6
 * 
 * Model for AgreementTypeWorkType
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\WorkTypeReference $workType
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
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Finance\AgreementTypeReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_6\Finance\WorkTypeReference',
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
    ];
}
