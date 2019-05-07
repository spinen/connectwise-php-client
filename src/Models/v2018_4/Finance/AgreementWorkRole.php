<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkRole
 *
 * @property integer $id
 * @property integer $locationId
 * @property string $rateType
 * @property double $rate
 * @property double $limitTo
 * @property carbon $effectiveDate
 * @property carbon $endingDate
 * @property integer $agreementId
 */
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
