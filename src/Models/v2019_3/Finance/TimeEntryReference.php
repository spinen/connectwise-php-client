<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntryReference Version v2019_3
 *
 * Model for TimeEntryReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'id' => 'integer',
    ];
}
