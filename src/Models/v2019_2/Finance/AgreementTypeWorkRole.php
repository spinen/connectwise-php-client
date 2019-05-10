<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkRole Version v2019_2
 * 
 * Model for AgreementTypeWorkRole
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\WorkRoleReference $workRole
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $endingDate
 * @property float $rate
 * @property string $rateType
 * @property float $limitTo
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Finance\AgreementTypeReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Finance\WorkRoleReference',
        'effectiveDate' => 'Carbon\Carbon',
        'endingDate' => 'Carbon\Carbon',
        'rate' => 'float',
        'rateType' => 'string',
        'limitTo' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
    ];
}
