<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDelegation Version v2019_5
 *
 * Model for MemberDelegation
 *
 * @property Carbon $dateEnd
 * @property Carbon $dateStart
 * @property MemberReference $delegatedTo
 * @property MemberReference $member
 * @property Metadata $_info
 * @property int $id
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
        '_info' => Metadata::class,
        'dateEnd' => Carbon::class,
        'dateStart' => Carbon::class,
        'delegatedTo' => MemberReference::class,
        'delegationType' => 'string',
        'id' => 'integer',
        'member' => MemberReference::class,
    ];
}
