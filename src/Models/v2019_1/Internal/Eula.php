<?php

namespace Spinen\ConnectWise\Models\v2019_1\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Eula Version v2019_1
 *
 * Model for Eula
 *
 * @property Carbon $signedDate
 * @property MemberReference $signedMember
 * @property Metadata $_info
 * @property int $id
 * @property string $eulaKey
 * @property string $eulaServiceLink
 * @property string $eulaUiLink
 */
class Eula extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'eulaKey' => 'string',
        'eulaServiceLink' => 'string',
        'eulaUiLink' => 'string',
        'id' => 'integer',
        'signedDate' => Carbon::class,
        'signedMember' => MemberReference::class,
    ];
}
