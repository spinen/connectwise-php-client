<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDelegation Version v2018_4
 *
 * Model for MemberDelegation
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $delegatedTo
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property integer $id
 * @property string $delegationType
 */
class MemberDelegation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'dateEnd' => 'Carbon\Carbon',
        'dateStart' => 'Carbon\Carbon',
        'delegatedTo' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        'delegationType' => 'string',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
    ];
}
