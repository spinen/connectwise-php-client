<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectContact Version v2019_1
 * 
 * Model for ProjectContact
 *
 * @property integer $id
 * @property integer $projectId
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_1\Project\Metadata $_info
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
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Project\ContactReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Project\Metadata',
    ];
}
