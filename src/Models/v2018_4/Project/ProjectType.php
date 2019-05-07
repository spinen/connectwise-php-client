<?php

namespace Spinen\ConnectWise\Models\v2018_4\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectType
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property string $integrationXref
 */
class ProjectType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'integrationXref' => 'string',
    ];
}
