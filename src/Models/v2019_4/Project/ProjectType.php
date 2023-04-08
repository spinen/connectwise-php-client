<?php

namespace Spinen\ConnectWise\Models\v2019_4\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectType Version v2019_4
 *
 * Model for ProjectType
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property int $id
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
        'name' => 'string',
    ];
}
