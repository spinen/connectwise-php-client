<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CentralServiceEula Version v2019_2
 *
 * Model for CentralServiceEula
 *
 * @property Carbon\Carbon $signedDate
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference $signedMember
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Metadata',
        'acceptedFlag' => 'boolean',
        'eulaKey' => 'string',
        'eulaServiceLink' => 'string',
        'eulaUiLink' => 'string',
        'id' => 'integer',
        'signedDate' => 'Carbon\Carbon',
        'signedMember' => 'Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference',
    ];
}
