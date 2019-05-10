<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactNote Version v2019_2
 *
 * Model for ContactNote
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Company\NoteTypeReference $type
 * @property boolean $flagged
 * @property integer $contactId
 * @property integer $id
 * @property string $enteredBy
 * @property string $text
 */
class ContactNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
        'contactId' => 'integer',
        'enteredBy' => 'string',
        'flagged' => 'boolean',
        'id' => 'integer',
        'text' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Company\NoteTypeReference',
    ];
}
