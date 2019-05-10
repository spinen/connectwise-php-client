<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketStopwatch Version v2018_5
 *
 * Model for TicketStopwatch
 *
 * @property Carbon\Carbon $dateEntered
 * @property Carbon\Carbon $endTime
 * @property Carbon\Carbon $startTime
 * @property Spinen\ConnectWise\Models\v2018_5\Time\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Guid $ticketMobileGuid
 * @property Spinen\ConnectWise\Models\v2018_5\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Time\ServiceStatusReference $serviceStatus
 * @property Spinen\ConnectWise\Models\v2018_5\Time\TicketReference $ticket
 * @property Spinen\ConnectWise\Models\v2018_5\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_5\Time\WorkTypeReference $workType
 * @property boolean $emailNotesToContactFlag
 * @property boolean $emailNotesToResourcesFlag
 * @property boolean $showNotesInDiscussionFlag
 * @property boolean $showNotesInInternalFlag
 * @property boolean $showNotesInResolutionFlag
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
 * @property integer $totalPauseTime
 * @property string $billableOption
 * @property string $internalNotes
 * @property string $notes
 * @property string $status
 */
class TicketStopwatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Time\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_5\Time\AgreementReference',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => 'Carbon\Carbon',
        'emailNotesToContactFlag' => 'boolean',
        'emailNotesToResourcesFlag' => 'boolean',
        'endTime' => 'Carbon\Carbon',
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Time\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Time\Guid',
        'notes' => 'string',
        'serviceStatus' => 'Spinen\ConnectWise\Models\v2018_5\Time\ServiceStatusReference',
        'showNotesInDiscussionFlag' => 'boolean',
        'showNotesInInternalFlag' => 'boolean',
        'showNotesInResolutionFlag' => 'boolean',
        'startTime' => 'Carbon\Carbon',
        'status' => 'string',
        'ticket' => 'Spinen\ConnectWise\Models\v2018_5\Time\TicketReference',
        'ticketMobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Time\Guid',
        'totalPauseTime' => 'integer',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_5\Time\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_5\Time\WorkTypeReference',
    ];
}
