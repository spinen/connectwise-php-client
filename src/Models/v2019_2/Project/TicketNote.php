<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketNote Version v2019_2
 * 
 * Model for TicketNote
 *
 * @property integer $id
 * @property integer $ticketId
 * @property string $text
 * @property boolean $detailDescriptionFlag
 * @property boolean $internalAnalysisFlag
 * @property boolean $resolutionFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Project\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ContactReference $contact
 * @property boolean $customerUpdatedFlag
 * @property boolean $processNotifications
 * @property boolean $internalFlag
 * @property boolean $externalFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Project\Metadata $_info
 */
class TicketNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ticketId' => 'integer',
        'text' => 'string',
        'detailDescriptionFlag' => 'boolean',
        'internalAnalysisFlag' => 'boolean',
        'resolutionFlag' => 'boolean',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Project\MemberReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_2\Project\ContactReference',
        'customerUpdatedFlag' => 'boolean',
        'processNotifications' => 'boolean',
        'internalFlag' => 'boolean',
        'externalFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Project\Metadata',
    ];
}
