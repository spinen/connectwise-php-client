<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkType Version v2018_5
 *
 * Model for WorkType
 *
 * @property integer $id
 * @property string $name
 * @property string $billTime
 * @property string $rateType
 * @property float $rate
 * @property float $hoursMin
 * @property float $hoursMax
 * @property float $roundBillHoursTo
 * @property Spinen\ConnectWise\Models\v2018_5\Time\ExternalWorkTypeIntegrationReference $externalIntegrationXRef
 * @property string $accrualType
 * @property boolean $inactiveFlag
 * @property boolean $overallDefaultFlag
 * @property boolean $activityDefaultFlag
 * @property boolean $utilizationFlag
 * @property float $costMultiplier
 * @property string $integrationXRef
 * @property boolean $addAllAgreementExclusions
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Metadata $_info
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
        'rate' => 'float',
        'hoursMin' => 'float',
        'hoursMax' => 'float',
        'roundBillHoursTo' => 'float',
        'externalIntegrationXRef' => 'Spinen\ConnectWise\Models\v2018_5\Time\ExternalWorkTypeIntegrationReference',
        'accrualType' => 'string',
        'inactiveFlag' => 'boolean',
        'overallDefaultFlag' => 'boolean',
        'activityDefaultFlag' => 'boolean',
        'utilizationFlag' => 'boolean',
        'costMultiplier' => 'float',
        'integrationXRef' => 'string',
        'addAllAgreementExclusions' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Time\Metadata',
    ];
}
