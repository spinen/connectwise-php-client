<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceNote Version v2019_1
 *
 * Model for ServiceNote
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_1\Service\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 * @property boolean $customerUpdatedFlag
 * @property boolean $detailDescriptionFlag
 * @property boolean $externalFlag
 * @property boolean $internalAnalysisFlag
 * @property boolean $internalFlag
 * @property boolean $processNotifications
 * @property boolean $resolutionFlag
 * @property integer $id
 * @property integer $ticketId
 * @property string $createdBy
 * @property string $dateCreated
 * @property string $text
 */
class ServiceNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Service\ContactReference',
        'createdBy' => 'string',
        'customerUpdatedFlag' => 'boolean',
        'dateCreated' => 'string',
        'detailDescriptionFlag' => 'boolean',
        'externalFlag' => 'boolean',
        'id' => 'integer',
        'internalAnalysisFlag' => 'boolean',
        'internalFlag' => 'boolean',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Service\MemberReference',
        'processNotifications' => 'boolean',
        'resolutionFlag' => 'boolean',
        'text' => 'string',
        'ticketId' => 'integer',
    ];
}
