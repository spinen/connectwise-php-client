<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkType
 *
 * @property integer $id
 * @property string $name
 * @property string $billTime
 * @property string $rateType
 * @property double $rate
 * @property double $hoursMin
 * @property double $hoursMax
 * @property double $roundBillHoursTo
 * @property string $accrualType
 * @property boolean $inactiveFlag
 * @property boolean $overallDefaultFlag
 * @property boolean $activityDefaultFlag
 * @property boolean $utilizationFlag
 * @property double $costMultiplier
 * @property string $integrationXRef
 * @property boolean $addAllAgreementExclusions
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
        'rate' => 'double',
        'hoursMin' => 'double',
        'hoursMax' => 'double',
        'roundBillHoursTo' => 'double',
        'accrualType' => 'string',
        'inactiveFlag' => 'boolean',
        'overallDefaultFlag' => 'boolean',
        'activityDefaultFlag' => 'boolean',
        'utilizationFlag' => 'boolean',
        'costMultiplier' => 'double',
        'integrationXRef' => 'string',
        'addAllAgreementExclusions' => 'boolean',
    ];
}
