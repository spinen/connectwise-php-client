<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class AgreementWorkRole extends Model
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
        'rate' => 'double',
        'limitTo' => 'double',
        'effectiveDate' => 'carbon',
        'endingDate' => 'carbon',
        'agreementId' => 'integer',
    ];
}
