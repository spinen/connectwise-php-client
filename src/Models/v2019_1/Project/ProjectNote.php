<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectNote Version v2019_1
 *
 * Model for ProjectNote
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Project\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Project\NoteTypeReference $type
 * @property boolean $flagged
 * @property integer $id
 * @property integer $projectId
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Project\Metadata',
        'flagged' => 'boolean',
        'id' => 'integer',
        'projectId' => 'integer',
        'text' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Project\NoteTypeReference',
    ];
}
