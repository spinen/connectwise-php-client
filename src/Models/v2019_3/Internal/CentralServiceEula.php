<?php

namespace Spinen\ConnectWise\Models\v2019_3\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CentralServiceEula Version v2019_3
 * 
 * Model for CentralServiceEula
 *
 * @property integer $id
 * @property string $eulaKey
 * @property boolean $acceptedFlag
 * @property string $eulaServiceLink
 * @property string $eulaUiLink
 * @property Spinen\ConnectWise\Models\v2019_3\Internal\MemberReference $signedMember
 * @property Carbon\Carbon $signedDate
 * @property Spinen\ConnectWise\Models\v2019_3\Internal\Metadata $_info
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
        'signedMember' => 'Spinen\ConnectWise\Models\v2019_3\Internal\MemberReference',
        'signedDate' => 'Carbon\Carbon',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Internal\Metadata',
    ];
}
