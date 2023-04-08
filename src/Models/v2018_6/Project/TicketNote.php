<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketNote Version v2018_6
 *
 * Model for TicketNote
 *
 * @property ContactReference $contact
 * @property MemberReference $member
 * @property Metadata $_info
 * @property bool $customerUpdatedFlag
 * @property bool $detailDescriptionFlag
 * @property bool $externalFlag
 * @property bool $internalAnalysisFlag
 * @property bool $internalFlag
 * @property bool $processNotifications
 * @property bool $resolutionFlag
 * @property int $id
 * @property int $ticketId
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
        'ticketId' => 'integer',
    ];
}
