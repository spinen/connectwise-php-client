<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectNote
 *
 * @property integer $id
 * @property integer $projectId
 * @property string $text
 * @property boolean $flagged
 */
class ProjectNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'projectId' => 'integer',
        'text' => 'string',
        'flagged' => 'boolean',
    ];
}
