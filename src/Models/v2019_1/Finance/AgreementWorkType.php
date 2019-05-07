<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkType
 *
 * @property integer $id
 * @property integer $locationId
 * @property string $rateType
 * @property string $billTime
 * @property double $rate
 * @property double $hoursMax
 * @property double $hoursMin
 * @property double $roundBillHours
 * @property double $overageRate
 * @property string $overageRateType
 * @property double $agreementLimit
 * @property carbon $effectiveDate
 * @property carbon $endingDate
 * @property integer $agreementId
 */
class AgreementWorkType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'locationId' => 'integer',
        'rateType' => 'string',
        'billTime' => 'string',
        'rate' => 'double',
        'hoursMax' => 'double',
        'hoursMin' => 'double',
        'roundBillHours' => 'double',
        'overageRate' => 'double',
        'overageRateType' => 'string',
        'agreementLimit' => 'double',
        'effectiveDate' => 'carbon',
        'endingDate' => 'carbon',
        'agreementId' => 'integer',
    ];
}
