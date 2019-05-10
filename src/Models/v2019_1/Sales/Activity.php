<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Activity Version v2019_1
 * 
 * Model for Activity
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ActivityTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference $contact
 * @property string $phoneNumber
 * @property string $email
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ActivityStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\TicketReference $ticket
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\CampaignReference $campaign
 * @property string $notes
 * @property Carbon\Carbon $dateStart
 * @property Carbon\Carbon $dateEnd
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\MemberReference $assignedBy
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\MemberReference $assignTo
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ScheduleStatusReference $scheduleStatus
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ReminderReference $reminder
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ServiceLocationReference $where
 * @property boolean $notifyFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ActivityTypeReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference',
        'phoneNumber' => 'string',
        'email' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ActivityStatusReference',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2019_1\Sales\TicketReference',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_1\Sales\AgreementReference',
        'campaign' => 'Spinen\ConnectWise\Models\v2019_1\Sales\CampaignReference',
        'notes' => 'string',
        'dateStart' => 'Carbon\Carbon',
        'dateEnd' => 'Carbon\Carbon',
        'assignedBy' => 'Spinen\ConnectWise\Models\v2019_1\Sales\MemberReference',
        'assignTo' => 'Spinen\ConnectWise\Models\v2019_1\Sales\MemberReference',
        'scheduleStatus' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ScheduleStatusReference',
        'reminder' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ReminderReference',
        'where' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ServiceLocationReference',
        'notifyFlag' => 'boolean',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Guid',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Sales\CurrencyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
        'customFields' => 'array',
    ];
}
