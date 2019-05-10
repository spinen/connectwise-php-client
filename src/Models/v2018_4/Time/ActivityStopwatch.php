<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityStopwatch Version v2018_4
 *
 * Model for ActivityStopwatch
 *
 * @property Carbon\Carbon $dateEntered
 * @property Carbon\Carbon $endTime
 * @property Carbon\Carbon $startTime
 * @property Spinen\ConnectWise\Models\v2018_4\Time\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2018_4\Time\Guid $activityMobileGuid
 * @property Spinen\ConnectWise\Models\v2018_4\Time\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_4\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_4\Time\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_4\Time\WorkTypeReference $workType
 * @property integer $activityId
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
 * @property integer $totalPauseTime
 * @property string $billableOption
 * @property string $internalNotes
 * @property string $notes
 * @property string $status
 */
class ActivityStopwatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Time\Metadata',
        'activityId' => 'integer',
        'activityMobileGuid' => 'Spinen\ConnectWise\Models\v2018_4\Time\Guid',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_4\Time\AgreementReference',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => 'Carbon\Carbon',
        'endTime' => 'Carbon\Carbon',
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Time\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_4\Time\Guid',
        'notes' => 'string',
        'startTime' => 'Carbon\Carbon',
        'status' => 'string',
        'totalPauseTime' => 'integer',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_4\Time\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_4\Time\WorkTypeReference',
    ];
}
