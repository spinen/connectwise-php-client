<?php

namespace Spinen\ConnectWise\Models\v2019_5\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CentralServiceEula Version v2019_5
 *
 * Model for CentralServiceEula
 *
 * @property Carbon $signedDate
 * @property MemberReference $signedMember
 * @property Metadata $_info
 * @property boolean $acceptedFlag
 * @property integer $id
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
        'signedMember' => MemberReference::class
    ];
}
