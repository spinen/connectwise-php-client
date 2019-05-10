<?php

namespace Spinen\ConnectWise\Models\v2019_1\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailOpened Version v2019_1
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
