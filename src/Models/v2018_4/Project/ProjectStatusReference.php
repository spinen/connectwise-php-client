<?php

namespace Spinen\ConnectWise\Models\v2018_4\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectStatusReference Version v2018_4
 *
 * Model for ProjectStatusReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ProjectStatusReference extends Model
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
