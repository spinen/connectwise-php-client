<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Session Version v2019_2
 *
 * Model for Session
 *
 * @property integer $id
 * @property integer $configurationId
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\TicketReference $ticket
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
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2019_2\Internal\TicketReference',
        'sessionGuid' => 'string',
    ];
}
