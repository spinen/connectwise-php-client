<?php

namespace Spinen\ConnectWise\Models\v2018_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class NoteTypeReference Version v2018_5
 *
 * Model for NoteTypeReference
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Project\Metadata $_info
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Project\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
