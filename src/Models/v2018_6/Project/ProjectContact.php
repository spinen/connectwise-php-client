<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectContact Version v2018_6
 *
 * Model for ProjectContact
 *
 * @property ContactReference $contact
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'contact' => ContactReference::class,
        'id' => 'integer',
        'projectId' => 'integer'
    ];
}
