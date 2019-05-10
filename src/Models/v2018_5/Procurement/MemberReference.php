<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberReference Version v2018_5
 *
 * Purchase Order Status Notification member must be entered if the notify type is "Specific Member"
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class MemberReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
