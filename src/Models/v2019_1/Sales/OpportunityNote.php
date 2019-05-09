<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityNote Version v2019_1
 * 
 * Model for OpportunityNote
 *
 * @property integer $id
 * @property integer $opportunityId
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\NoteTypeReference $type
 * @property string $text
 * @property boolean $flagged
 * @property string $enteredBy
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Sales\NoteTypeReference',
        'text' => 'string',
        'flagged' => 'boolean',
        'enteredBy' => 'string',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Guid',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
    ];
}
