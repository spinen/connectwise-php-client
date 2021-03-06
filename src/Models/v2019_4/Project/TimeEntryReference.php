<?php

namespace Spinen\ConnectWise\Models\v2019_4\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntryReference Version v2019_4
 *
 * Model for TimeEntryReference
 *
 * @property Metadata $_info
 * @property integer $id
 */
class TimeEntryReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer'
    ];
}
