<?php

namespace Spinen\ConnectWise\Models\v2018_5\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailOpened Version v2018_5
 *
 * Model for EmailOpened
 *
 * @property Carbon $dateOpened
 * @property int $campaignId
 * @property int $contactId
 * @property int $id
 */
class EmailOpened extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'campaignId' => 'integer',
        'contactId' => 'integer',
        'dateOpened' => Carbon::class,
        'id' => 'integer',
    ];
}
