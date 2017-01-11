<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class ContactNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'         => 'integer',
        'contactId ' => 'integer',
        'text'       => 'string',
        //        'type'       => 'NoteTypeReference',
        'flagged'    => 'boolean',
        'enteredBy ' => 'string',
        //        '_info'     => 'Metadata',
    ];
}
