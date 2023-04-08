<?php

namespace Spinen\ConnectWise\Models\v2019_1\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketingContact Version v2019_1
 *
 * Model for MarketingContact
 *
 * @property Metadata $_info
 * @property bool $unsubscribeFlag
 * @property int $groupId
 * @property int $id
 * @property string $note
 */
class MarketingContact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'groupId' => 'integer',
        'id' => 'integer',
        'note' => 'string',
        'unsubscribeFlag' => 'boolean',
    ];
}
