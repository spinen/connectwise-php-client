<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class AgreementAdjustment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'amount'        => 'double',
        'description'   => 'string',
        'effectiveDate' => 'carbon',
        'agreementId'   => 'integer',
        //        '_info'         => 'Metadata',
    ];
}
