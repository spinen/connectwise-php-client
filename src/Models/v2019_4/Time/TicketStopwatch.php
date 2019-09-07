<?php

namespace Spinen\ConnectWise\Models\v2019_4\Time;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketStopwatch Version v2019_4
 *
 * Model for TicketStopwatch
 *
 * @property AgreementReference $agreement
 * @property Carbon $dateEntered
 * @property Carbon $endTime
 * @property Carbon $startTime
 * @property Guid $mobileGuid
 * @property Guid $ticketMobileGuid
 * @property MemberReference $member
 * @property Metadata $_info
 * @property ServiceStatusReference $serviceStatus
 * @property TicketReference $ticket
 * @property WorkRoleReference $workRole
 * @property WorkTypeReference $workType
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
        '_info' => Metadata::class,
        'agreement' => AgreementReference::class,
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => Carbon::class,
        'emailNotesToContactFlag' => 'boolean',
        'emailNotesToResourcesFlag' => 'boolean',
        'endTime' => Carbon::class,
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'member' => MemberReference::class,
        'mobileGuid' => Guid::class,
        'notes' => 'string',
        'serviceStatus' => ServiceStatusReference::class,
        'showNotesInDiscussionFlag' => 'boolean',
        'showNotesInInternalFlag' => 'boolean',
        'showNotesInResolutionFlag' => 'boolean',
        'startTime' => Carbon::class,
        'status' => 'string',
        'ticket' => TicketReference::class,
        'ticketMobileGuid' => Guid::class,
        'totalPauseTime' => 'integer',
        'workRole' => WorkRoleReference::class,
        'workType' => WorkTypeReference::class
    ];
}
