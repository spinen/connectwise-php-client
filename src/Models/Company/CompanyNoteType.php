<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class CompanyNoteType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'importFlag' => 'boolean',
    ];
}
