<?php

namespace Spinen\ConnectWise\Models\v2019_1\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailOpened Version v2019_1
 *
 * Model for EmailOpened
 *
 * @property Carbon\Carbon $dateOpened
 * @property integer $campaignId
 * @property integer $contactId
 * @property integer $id
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
        'dateOpened' => 'Carbon\Carbon',
        'id' => 'integer',
    ];
}
