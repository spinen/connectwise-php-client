<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class NoteTypeReference Version v2018_6
 *
 * Model for NoteTypeReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class NoteTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
