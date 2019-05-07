<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectNote
 *
 * @property integer $count
 */
class ProjectNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
    ];
}