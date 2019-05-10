<?php

namespace Spinen\ConnectWise\Models\v2018_5\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Session Version v2018_5
 *
 * Model for Session
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\TicketReference $ticket
 * @property integer $configurationId
 * @property integer $id
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
        'configurationId' => 'integer',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Internal\MemberReference',
        'sessionGuid' => 'string',
        'ticket' => 'Spinen\ConnectWise\Models\v2018_5\Internal\TicketReference',
    ];
}
