<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketingCompany Version v2019_2
 *
 * Model for MarketingCompany
 *
 * @property integer $id
 * @property integer $groupId
 * @property boolean $defaultContactFlag
 * @property boolean $allContactsFlag
 * @property boolean $unsubscribeFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata',
    ];
}
