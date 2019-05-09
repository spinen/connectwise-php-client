<?php

namespace Spinen\ConnectWise\Models\v2018_6\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketingContact Version v2018_6
 * 
 * Model for MarketingContact
 *
 * @property integer $id
 * @property integer $groupId
 * @property string $note
 * @property boolean $unsubscribeFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Marketing\Metadata $_info
 */
class MarketingContact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'groupId' => 'integer',
        'note' => 'string',
        'unsubscribeFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Marketing\Metadata',
    ];
}
