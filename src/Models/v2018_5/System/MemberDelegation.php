<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDelegation Version v2018_5
 * 
 * Model for MemberDelegation
 *
 * @property integer $id
 * @property string $delegationType
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $delegatedTo
 * @property Carbon\Carbon $dateStart
 * @property Carbon\Carbon $dateEnd
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class MemberDelegation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'delegationType' => 'string',
        'delegatedTo' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
        'dateStart' => 'Carbon\Carbon',
        'dateEnd' => 'Carbon\Carbon',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
