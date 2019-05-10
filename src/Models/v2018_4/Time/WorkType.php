<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkType Version v2018_4
 *
 * Model for WorkType
 *
 * @property ExternalWorkTypeIntegrationReference $externalIntegrationXRef
 * @property Metadata $_info
 * @property boolean $activityDefaultFlag
 * @property boolean $addAllAgreementExclusions
 * @property boolean $inactiveFlag
 * @property boolean $overallDefaultFlag
 * @property boolean $utilizationFlag
 * @property float $costMultiplier
 * @property float $hoursMax
 * @property float $hoursMin
 * @property float $rate
 * @property float $roundBillHoursTo
 * @property integer $id
 * @property string $accrualType
 * @property string $billTime
 * @property string $integrationXRef
 * @property string $name
 * @property string $rateType
 */
class WorkType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'accrualType' => 'string',
        'activityDefaultFlag' => 'boolean',
        'addAllAgreementExclusions' => 'boolean',
        'billTime' => 'string',
        'costMultiplier' => 'float',
        'externalIntegrationXRef' => ExternalWorkTypeIntegrationReference::class,
        'hoursMax' => 'float',
        'hoursMin' => 'float',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'integrationXRef' => 'string',
        'name' => 'string',
        'overallDefaultFlag' => 'boolean',
        'rate' => 'float',
        'rateType' => 'string',
        'roundBillHoursTo' => 'float',
        'utilizationFlag' => 'boolean',
    ];
}
