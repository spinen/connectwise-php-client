<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkRole Version v2019_2
 *
 * Model for AgreementTypeWorkRole
 *
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $endingDate
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\WorkRoleReference $workRole
 * @property float $limitTo
 * @property float $rate
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
        'effectiveDate' => 'Carbon\Carbon',
        'endingDate' => 'Carbon\Carbon',
        'id' => 'integer',
        'limitTo' => 'float',
        'rate' => 'float',
        'rateType' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Finance\AgreementTypeReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Finance\WorkRoleReference',
    ];
}
