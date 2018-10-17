<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class AgreementTypeWorkRole extends Model
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
    ];
}
