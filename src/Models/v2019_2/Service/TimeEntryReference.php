<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntryReference Version v2019_2
 *
 * Model for TimeEntryReference
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 */
class TimeEntryReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
    ];
}
