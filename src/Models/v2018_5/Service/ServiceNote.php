<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceNote Version v2018_5
 *
 * Model for ServiceNote
 *
 * @property integer $id
 * @property integer $ticketId
 * @property string $text
 * @property boolean $detailDescriptionFlag
 * @property boolean $internalAnalysisFlag
 * @property boolean $resolutionFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Service\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Service\ContactReference $contact
 * @property boolean $customerUpdatedFlag
 * @property boolean $processNotifications
 * @property string $dateCreated
 * @property string $createdBy
 * @property boolean $internalFlag
 * @property boolean $externalFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
 */
class ServiceNote extends Model
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
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Service\MemberReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_5\Service\ContactReference',
        'customerUpdatedFlag' => 'boolean',
        'processNotifications' => 'boolean',
        'dateCreated' => 'string',
        'createdBy' => 'string',
        'internalFlag' => 'boolean',
        'externalFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
    ];
}
