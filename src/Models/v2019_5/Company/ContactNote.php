<?php

namespace Spinen\ConnectWise\Models\v2019_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactNote Version v2019_5
 *
 * Model for ContactNote
 *
 * @property Metadata $_info
 * @property NoteTypeReference $type
 * @property bool $flagged
 * @property int $contactId
 * @property int $id
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
        '_info' => Metadata::class,
        'contactId' => 'integer',
        'enteredBy' => 'string',
        'flagged' => 'boolean',
        'id' => 'integer',
        'text' => 'string',
        'type' => NoteTypeReference::class,
    ];
}
