<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkType Version v2019_2
 * 
 * Model for WorkType
 *
 * @property integer $id
 * @property string $name
 * @property string $billTime
 * @property string $rateType
 * @property number $rate
 * @property number $hoursMin
 * @property number $hoursMax
 * @property number $roundBillHoursTo
 * @property Spinen\ConnectWise\Models\v2019_2\Time\ExternalWorkTypeIntegrationReference $externalIntegrationXRef
 * @property string $accrualType
 * @property boolean $inactiveFlag
 * @property boolean $overallDefaultFlag
 * @property boolean $activityDefaultFlag
 * @property boolean $utilizationFlag
 * @property number $costMultiplier
 * @property string $integrationXRef
 * @property boolean $addAllAgreementExclusions
 * @property Spinen\ConnectWise\Models\v2019_2\Time\Metadata $_info
 */
class WorkType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'billTime' => 'string',
        'rateType' => 'string',
        'rate' => 'number',
        'hoursMin' => 'number',
        'hoursMax' => 'number',
        'roundBillHoursTo' => 'number',
        'externalIntegrationXRef' => 'Spinen\ConnectWise\Models\v2019_2\Time\ExternalWorkTypeIntegrationReference',
        'accrualType' => 'string',
        'inactiveFlag' => 'boolean',
        'overallDefaultFlag' => 'boolean',
        'activityDefaultFlag' => 'boolean',
        'utilizationFlag' => 'boolean',
        'costMultiplier' => 'number',
        'integrationXRef' => 'string',
        'addAllAgreementExclusions' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Time\Metadata',
    ];
}
