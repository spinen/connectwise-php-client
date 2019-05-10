<?php

namespace Spinen\ConnectWise\Models\v2019_3\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketStopwatch Version v2019_3
 *
 * Model for TicketStopwatch
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Time\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Time\AgreementReference $agreement
 * @property string $billableOption
 * @property integer $businessUnitId
 * @property Carbon\Carbon $dateEntered
 * @property Carbon\Carbon $endTime
 * @property integer $id
 * @property string $internalNotes
 * @property integer $locationId
 * @property Spinen\ConnectWise\Models\v2019_3\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\Time\Guid $mobileGuid
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_3\Time\ServiceStatusReference $serviceStatus
 * @property Carbon\Carbon $startTime
 * @property string $status
 * @property Spinen\ConnectWise\Models\v2019_3\Time\TicketReference $ticket
 * @property Spinen\ConnectWise\Models\v2019_3\Time\Guid $ticketMobileGuid
 * @property integer $totalPauseTime
 * @property Spinen\ConnectWise\Models\v2019_3\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_3\Time\WorkTypeReference $workType
 * @property boolean $showNotesInDiscussionFlag
 * @property boolean $showNotesInInternalFlag
 * @property boolean $showNotesInResolutionFlag
 * @property boolean $emailNotesToContactFlag
 * @property boolean $emailNotesToResourcesFlag
 */
class TicketStopwatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Time\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_3\Time\AgreementReference',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => 'Carbon\Carbon',
        'endTime' => 'Carbon\Carbon',
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Time\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_3\Time\Guid',
        'notes' => 'string',
        'serviceStatus' => 'Spinen\ConnectWise\Models\v2019_3\Time\ServiceStatusReference',
        'startTime' => 'Carbon\Carbon',
        'status' => 'string',
        'ticket' => 'Spinen\ConnectWise\Models\v2019_3\Time\TicketReference',
        'ticketMobileGuid' => 'Spinen\ConnectWise\Models\v2019_3\Time\Guid',
        'totalPauseTime' => 'integer',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_3\Time\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_3\Time\WorkTypeReference',
        'showNotesInDiscussionFlag' => 'boolean',
        'showNotesInInternalFlag' => 'boolean',
        'showNotesInResolutionFlag' => 'boolean',
        'emailNotesToContactFlag' => 'boolean',
        'emailNotesToResourcesFlag' => 'boolean',
    ];
}
