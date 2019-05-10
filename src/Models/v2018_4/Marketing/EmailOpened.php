<?php

namespace Spinen\ConnectWise\Models\v2018_4\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailOpened Version v2018_4
 *
 * Model for EmailOpened
 *
 * @property integer $id
 * @property integer $campaignId
 * @property integer $contactId
 * @property Carbon\Carbon $dateOpened
 */
class EmailOpened extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'campaignId' => 'integer',
        'contactId' => 'integer',
        'dateOpened' => 'Carbon\Carbon',
    ];
}
