<?php

namespace Spinen\ConnectWise\Models\v2018_6\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketingCompany Version v2018_6
 *
 * Model for MarketingCompany
 *
 * @property integer $id
 * @property integer $groupId
 * @property boolean $defaultContactFlag
 * @property boolean $allContactsFlag
 * @property boolean $unsubscribeFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Marketing\Metadata $_info
 */
class MarketingCompany extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'groupId' => 'integer',
        'defaultContactFlag' => 'boolean',
        'allContactsFlag' => 'boolean',
        'unsubscribeFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Marketing\Metadata',
    ];
}
