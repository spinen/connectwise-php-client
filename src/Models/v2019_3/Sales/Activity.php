<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Activity Version v2019_3
 * 
 * Model for Activity
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ActivityTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference $contact
 * @property string $phoneNumber
 * @property string $email
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ActivityStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\TicketReference $ticket
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\CampaignReference $campaign
 * @property string $notes
 * @property Carbon\Carbon $dateStart
 * @property Carbon\Carbon $dateEnd
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference $assignedBy
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference $assignTo
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ScheduleStatusReference $scheduleStatus
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ReminderReference $reminder
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ServiceLocationReference $where
 * @property boolean $notifyFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 * @property array $customFields
 */
class Activity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ActivityTypeReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference',
        'phoneNumber' => 'string',
        'email' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ActivityStatusReference',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_3\Sales\OpportunityReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2019_3\Sales\TicketReference',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_3\Sales\AgreementReference',
        'campaign' => 'Spinen\ConnectWise\Models\v2019_3\Sales\CampaignReference',
        'notes' => 'string',
        'dateStart' => 'Carbon\Carbon',
        'dateEnd' => 'Carbon\Carbon',
        'assignedBy' => 'Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference',
        'assignTo' => 'Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference',
        'scheduleStatus' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ScheduleStatusReference',
        'reminder' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ReminderReference',
        'where' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ServiceLocationReference',
        'notifyFlag' => 'boolean',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Guid',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Sales\CurrencyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
        'customFields' => 'array',
    ];
}
