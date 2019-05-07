<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectContact
 *
 * @property integer $id
 * @property integer $projectId
 */
class ProjectContact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'projectId' => 'integer',
    ];
}
