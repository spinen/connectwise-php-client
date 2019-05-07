<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketNote
 *
 * @property integer $id
 * @property integer $ticketId
 * @property string $text
 * @property boolean $detailDescriptionFlag
 * @property boolean $internalAnalysisFlag
 * @property boolean $resolutionFlag
 * @property boolean $customerUpdatedFlag
 * @property boolean $processNotifications
 * @property string $dateCreated
 * @property string $createdBy
 * @property boolean $internalFlag
 * @property boolean $externalFlag
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
        'customerUpdatedFlag' => 'boolean',
        'processNotifications' => 'boolean',
        'dateCreated' => 'string',
        'createdBy' => 'string',
        'internalFlag' => 'boolean',
        'externalFlag' => 'boolean',
    ];
}
