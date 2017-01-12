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
        'id'             => 'integer',
        //        'workType'        => 'WorkTypeReference',
        'locationId'     => 'integer',
        //        'rateType'        => 'Enum',
        //        'billTime'        => 'Enum',
        'rate'           => 'double',
        'hoursMax'       => 'double',
        'hoursMin'       => 'double',
        'roundBillHours' => 'double',
        'overageRate'    => 'double',
        //        'overageRateType' => 'Enum',
        'agreementLimit' => 'double',
        //        'site'            => 'SiteReference',
        'effectiveDate'  => 'carbon',
        'endingDate'     => 'carbon',
        'agreementId'    => 'integer',
        //        'company'         => 'CompanyReference',
        //        '_info'           => 'Metadata',
    ];
}
