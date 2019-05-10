<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkRole Version v2018_5
 *
 * Model for AgreementWorkRole
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\WorkRoleReference $workRole
 * @property integer $locationId
 * @property string $rateType
 * @property float $rate
 * @property float $limitTo
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $endingDate
 * @property integer $agreementId
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
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
        'workRole' => 'Spinen\ConnectWise\Models\v2018_5\Finance\WorkRoleReference',
        'locationId' => 'integer',
        'rateType' => 'string',
        'rate' => 'float',
        'limitTo' => 'float',
        'effectiveDate' => 'Carbon\Carbon',
        'endingDate' => 'Carbon\Carbon',
        'agreementId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}
