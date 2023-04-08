<?php

namespace Spinen\ConnectWise\Models\v2019_4\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailOpened Version v2019_4
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
