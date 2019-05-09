<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactNote Version v2019_3
 * 
 * Model for ContactNote
 *
 * @property integer $id
 * @property integer $contactId
 * @property string $text
 * @property Spinen\ConnectWise\Models\v2019_3\Company\NoteTypeReference $type
 * @property boolean $flagged
 * @property string $enteredBy
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
 */
class ContactNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'contactId' => 'integer',
        'text' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Company\NoteTypeReference',
        'flagged' => 'boolean',
        'enteredBy' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
    ];
}
