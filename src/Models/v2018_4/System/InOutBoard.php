<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class InOutBoard Version v2018_4
 *
 * Model for InOutBoard
 *
 * @property Carbon $dateBack
 * @property InOutTypeReference $inOutType
 * @property MemberReference $member
 * @property Metadata $_info
 * @property int $id
 * @property string $additionalInfo
 */
class InOutBoard extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'additionalInfo' => 'string',
        'dateBack' => Carbon::class,
        'id' => 'integer',
        'inOutType' => InOutTypeReference::class,
        'member' => MemberReference::class,
    ];
}
