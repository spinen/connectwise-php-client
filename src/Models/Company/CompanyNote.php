<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class CompanyNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'         => 'integer',
        'text'       => 'string',
        //        'type'       => 'NoteTypeReference',
        'flagged'    => 'boolean',
        'enteredBy ' => 'string',
        //        'company '   => 'CompanyReference',
        //        '_info'      => 'Metadata',
    ];
}
