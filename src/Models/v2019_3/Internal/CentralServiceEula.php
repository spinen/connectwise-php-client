<?php

namespace Spinen\ConnectWise\Models\v2019_3\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CentralServiceEula
 *
 * @property integer $id
 * @property string $eulaKey
 * @property boolean $acceptedFlag
 * @property string $eulaServiceLink
 * @property string $eulaUiLink
 * @property carbon $signedDate
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
        'signedDate' => 'carbon',
    ];
}
