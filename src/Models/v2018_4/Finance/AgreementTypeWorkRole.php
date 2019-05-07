<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkRole
 *
 * @property integer $id
 * @property carbon $effectiveDate
 * @property carbon $endingDate
 * @property double $rate
 * @property string $rateType
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
    ];
}
