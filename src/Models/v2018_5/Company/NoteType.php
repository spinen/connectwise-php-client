<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class NoteType Version v2018_5
 *
 * Model for NoteType
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property bool $importFlag
 * @property int $id
 * @property string $identifier
 * @property string $name
 */
class NoteType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'importFlag' => 'boolean',
        'name' => 'string',
    ];
}
