<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Eula Version v2018_6
 * 
 * Model for Eula
 *
 * @property integer $id
 * @property string $eulaKey
 * @property string $eulaServiceLink
 * @property string $eulaUiLink
 * @property Spinen\ConnectWise\Models\v2018_6\System\MemberReference $signedMember
 * @property Carbon\Carbon $signedDate
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 */
class Eula extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'eulaKey' => 'string',
        'eulaServiceLink' => 'string',
        'eulaUiLink' => 'string',
        'signedMember' => 'Spinen\ConnectWise\Models\v2018_6\System\MemberReference',
        'signedDate' => 'Carbon\Carbon',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
    ];
}
