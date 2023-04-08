<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CentralServiceEula Version v2018_5
 *
 * Model for CentralServiceEula
 *
 * @property Carbon $signedDate
 * @property MemberReference $signedMember
 * @property Metadata $_info
 * @property bool $acceptedFlag
 * @property int $id
 * @property string $eulaKey
 * @property string $eulaServiceLink
 * @property string $eulaUiLink
 */
class CentralServiceEula extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'acceptedFlag' => 'boolean',
        'eulaKey' => 'string',
        'eulaServiceLink' => 'string',
        'eulaUiLink' => 'string',
        'id' => 'integer',
        'signedDate' => Carbon::class,
        'signedMember' => MemberReference::class,
    ];
}
