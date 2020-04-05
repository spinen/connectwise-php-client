<?php

namespace Spinen\ConnectWise\Models\v2019_5\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectPhaseReference Version v2019_5
 *
 * Model for ProjectPhaseReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ProjectPhaseReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
