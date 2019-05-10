<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CentralServiceEula Version v2018_5
 *
 * Model for CentralServiceEula
 *
 * @property integer $id
 * @property string $eulaKey
 * @property boolean $acceptedFlag
 * @property string $eulaServiceLink
 * @property string $eulaUiLink
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $signedMember
 * @property Carbon\Carbon $signedDate
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class CentralServiceEula extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'eulaKey' => 'string',
        'acceptedFlag' => 'boolean',
        'eulaServiceLink' => 'string',
        'eulaUiLink' => 'string',
        'signedMember' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
        'signedDate' => 'Carbon\Carbon',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
