<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

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
    ];
}
