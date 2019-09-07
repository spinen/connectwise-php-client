<?php

namespace Spinen\ConnectWise\Models\v2019_4\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketingContact Version v2019_4
 *
 * Model for MarketingContact
 *
 * @property Metadata $_info
 * @property boolean $unsubscribeFlag
 * @property integer $groupId
 * @property integer $id
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
        'unsubscribeFlag' => 'boolean'
    ];
}
