<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketingContact Version v2019_2
 *
 * Model for MarketingContact
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata',
        'groupId' => 'integer',
        'id' => 'integer',
        'note' => 'string',
        'unsubscribeFlag' => 'boolean',
    ];
}
