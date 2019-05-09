<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectContact Version v2018_6
 * 
 * Model for ProjectContact
 *
 * @property integer $id
 * @property integer $projectId
 * @property Spinen\ConnectWise\Models\v2018_6\Project\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_6\Project\Metadata $_info
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
        'contact' => 'Spinen\ConnectWise\Models\v2018_6\Project\ContactReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Project\Metadata',
    ];
}
