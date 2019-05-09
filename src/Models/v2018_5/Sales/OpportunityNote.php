<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityNote Version v2018_5
 * 
 * Model for OpportunityNote
 *
 * @property integer $id
 * @property integer $opportunityId
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\NoteTypeReference $type
 * @property string $text
 * @property boolean $flagged
 * @property string $enteredBy
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 */
class OpportunityNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'opportunityId' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Sales\NoteTypeReference',
        'text' => 'string',
        'flagged' => 'boolean',
        'enteredBy' => 'string',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Guid',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
    ];
}
