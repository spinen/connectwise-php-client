<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkRole Version v2019_2
 * 
 * Model for AgreementWorkRole
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\WorkRoleReference $workRole
 * @property integer $locationId
 * @property string $rateType
 * @property number $rate
 * @property number $limitTo
 * @property string $effectiveDate
 * @property string $endingDate
 * @property integer $agreementId
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
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
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Finance\WorkRoleReference',
        'locationId' => 'integer',
        'rateType' => 'string',
        'rate' => 'number',
        'limitTo' => 'number',
        'effectiveDate' => 'string',
        'endingDate' => 'string',
        'agreementId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
    ];
}
