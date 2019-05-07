<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkType
 *
 * @property integer $id
 * @property carbon $effectiveDate
 * @property carbon $endingDate
 * @property double $rate
 * @property string $rateType
 * @property string $billTime
 * @property double $hoursMin
 * @property double $hoursMax
 * @property double $roundBillHours
 * @property double $overageRate
 * @property string $overageRateType
 * @property double $limitTo
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
        'effectiveDate' => 'carbon',
        'endingDate' => 'carbon',
        'rate' => 'double',
        'rateType' => 'string',
        'billTime' => 'string',
        'hoursMin' => 'double',
        'hoursMax' => 'double',
        'roundBillHours' => 'double',
        'overageRate' => 'double',
        'overageRateType' => 'string',
        'limitTo' => 'double',
    ];
}
