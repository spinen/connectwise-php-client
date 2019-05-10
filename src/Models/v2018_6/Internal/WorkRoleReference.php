<?php

namespace Spinen\ConnectWise\Models\v2018_6\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRoleReference Version v2018_6
 *
 * Model for WorkRoleReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class WorkRoleReference extends Model
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
