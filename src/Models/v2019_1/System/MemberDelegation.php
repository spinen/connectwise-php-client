<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDelegation Version v2019_1
 *
 * Model for MemberDelegation
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property MemberReference $delegatedTo
 * @property MemberReference $member
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'dateEnd' => Carbon\Carbon::class,
        'dateStart' => Carbon\Carbon::class,
        'delegatedTo' => MemberReference::class,
        'delegationType' => 'string',
        'id' => 'integer',
        'member' => MemberReference::class,
    ];
}
