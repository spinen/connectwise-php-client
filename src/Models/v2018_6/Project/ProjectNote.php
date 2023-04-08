<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectNote Version v2018_6
 *
 * Model for ProjectNote
 *
 * @property Metadata $_info
 * @property NoteTypeReference $type
 * @property bool $flagged
 * @property int $id
 * @property int $projectId
 * @property string $text
 */
class ProjectNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'flagged' => 'boolean',
        'id' => 'integer',
        'projectId' => 'integer',
        'text' => 'string',
        'type' => NoteTypeReference::class,
    ];
}
