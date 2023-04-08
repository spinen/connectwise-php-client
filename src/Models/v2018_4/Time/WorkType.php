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
 * @property bool $activityDefaultFlag
 * @property bool $addAllAgreementExclusions
 * @property bool $inactiveFlag
 * @property bool $overallDefaultFlag
 * @property bool $utilizationFlag
 * @property float $costMultiplier
 * @property float $hoursMax
 * @property float $hoursMin
 * @property float $rate
 * @property float $roundBillHoursTo
 * @property int $id
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
