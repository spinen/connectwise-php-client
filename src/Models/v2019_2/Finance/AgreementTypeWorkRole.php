<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkRole
 *
 * @property integer $id
 * @property carbon $effectiveDate
 * @property carbon $endingDate
 * @property double $rate
 * @property string $rateType
 * @property double $limitTo
 */
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
        'limitTo' => 'double',
    ];
}
