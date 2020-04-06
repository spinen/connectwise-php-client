<?php

namespace Spinen\ConnectWise\Models\v2019_5\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyNote Version v2019_5
 *
 * Model for CompanyNote
 *
 * @property CompanyReference $company
 * @property Metadata $_info
 * @property NoteTypeReference $type
 * @property boolean $flagged
 * @property integer $id
 * @property string $enteredBy
 * @property string $text
 */
class CompanyNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'company' => CompanyReference::class,
        'enteredBy' => 'string',
        'flagged' => 'boolean',
        'id' => 'integer',
        'text' => 'string',
        'type' => NoteTypeReference::class
    ];
}
