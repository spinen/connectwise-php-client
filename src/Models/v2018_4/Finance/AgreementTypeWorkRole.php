<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkRole Version v2018_4
 *
 * Model for AgreementTypeWorkRole
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\WorkRoleReference $workRole
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $endingDate
 * @property float $rate
 * @property string $rateType
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2018_4\Finance\AgreementTypeReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_4\Finance\WorkRoleReference',
        'effectiveDate' => 'Carbon\Carbon',
        'endingDate' => 'Carbon\Carbon',
        'rate' => 'float',
        'rateType' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
    ];
}
