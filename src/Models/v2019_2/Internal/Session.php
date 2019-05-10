<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Session Version v2019_2
 *
 * Model for Session
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\TicketReference $ticket
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
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference',
        'sessionGuid' => 'string',
        'ticket' => 'Spinen\ConnectWise\Models\v2019_2\Internal\TicketReference',
    ];
}
