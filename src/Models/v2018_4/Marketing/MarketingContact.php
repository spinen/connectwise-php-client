<?php

namespace Spinen\ConnectWise\Models\v2018_4\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketingContact Version v2018_4
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
