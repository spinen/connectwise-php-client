<?php

namespace Spinen\ConnectWise\Models\v2018_6\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Session Version v2018_6
 * 
 * Model for Session
 *
 * @property integer $id
 * @property integer $configurationId
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\TicketReference $ticket
 * @property string $sessionGuid
 */
class Session extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'configurationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Internal\MemberReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2018_6\Internal\TicketReference',
        'sessionGuid' => 'string',
    ];
}
