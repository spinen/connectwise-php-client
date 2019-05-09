<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDelegation Version v2019_1
 * 
 * Model for MemberDelegation
 *
 * @property integer $id
 * @property string $delegationType
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $delegatedTo
 * @property string $dateStart
 * @property string $dateEnd
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
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
        'delegatedTo' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'dateStart' => 'string',
        'dateEnd' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
