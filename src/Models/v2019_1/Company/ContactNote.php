<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactNote
 *
 * @property integer $id
 * @property integer $contactId
 * @property string $text
 * @property boolean $flagged
 * @property string $enteredBy
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
        'flagged' => 'boolean',
        'enteredBy' => 'string',
    ];
}
