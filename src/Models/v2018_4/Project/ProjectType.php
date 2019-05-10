<?php

namespace Spinen\ConnectWise\Models\v2018_4\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectType Version v2018_4
 *
 * Model for ProjectType
 *
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $integrationXref
 * @property string $name
 */
class ProjectType extends Model
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
        'inactiveFlag' => 'boolean',
        'integrationXref' => 'string',
        'name' => 'string'
    ];
}
