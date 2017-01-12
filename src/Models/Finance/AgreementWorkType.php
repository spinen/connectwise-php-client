<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

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
