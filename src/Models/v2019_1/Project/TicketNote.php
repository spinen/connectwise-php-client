<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketNote Version v2019_1
 *
 * Model for TicketNote
 *
 * @property ContactReference $contact
 * @property MemberReference $member
 * @property Metadata $_info
 * @property boolean $customerUpdatedFlag
 * @property boolean $detailDescriptionFlag
 * @property boolean $externalFlag
 * @property boolean $internalAnalysisFlag
 * @property boolean $internalFlag
 * @property boolean $processNotifications
 * @property boolean $resolutionFlag
 * @property integer $id
 * @property integer $ticketId
 * @property string $text
 */
class TicketNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'contact' => ContactReference::class,
        'customerUpdatedFlag' => 'boolean',
        'detailDescriptionFlag' => 'boolean',
        'externalFlag' => 'boolean',
        'id' => 'integer',
        'internalAnalysisFlag' => 'boolean',
        'internalFlag' => 'boolean',
        'member' => MemberReference::class,
        'processNotifications' => 'boolean',
        'resolutionFlag' => 'boolean',
        'text' => 'string',
        'ticketId' => 'integer'
    ];
}
