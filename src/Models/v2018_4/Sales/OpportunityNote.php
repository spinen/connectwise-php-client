<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityNote
 *
 * @property integer $id
 * @property integer $opportunityId
 * @property string $text
 * @property boolean $flagged
 * @property string $enteredBy
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
        'text' => 'string',
        'flagged' => 'boolean',
        'enteredBy' => 'string',
    ];
}
