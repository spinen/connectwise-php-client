<?php

namespace Spinen\ConnectWise\Models\v2018_6\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketingCompany Version v2018_6
 *
 * Model for MarketingCompany
 *
 * @property Metadata $_info
 * @property bool $allContactsFlag
 * @property bool $defaultContactFlag
 * @property bool $unsubscribeFlag
 * @property int $groupId
 * @property int $id
 */
class MarketingCompany extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'allContactsFlag' => 'boolean',
        'defaultContactFlag' => 'boolean',
        'groupId' => 'integer',
        'id' => 'integer',
        'unsubscribeFlag' => 'boolean',
    ];
}
