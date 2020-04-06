<?php

namespace Spinen\ConnectWise\Models\v2019_5\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityNote Version v2019_5
 *
 * Model for OpportunityNote
 *
 * @property Guid $mobileGuid
 * @property Metadata $_info
 * @property NoteTypeReference $type
 * @property boolean $flagged
 * @property integer $id
 * @property integer $opportunityId
 * @property string $enteredBy
 * @property string $text
 */
class OpportunityNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'enteredBy' => 'string',
        'flagged' => 'boolean',
        'id' => 'integer',
        'mobileGuid' => Guid::class,
        'opportunityId' => 'integer',
        'text' => 'string',
        'type' => NoteTypeReference::class
    ];
}
