<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Eula
 *
 * @property integer $id
 * @property string $eulaKey
 * @property string $eulaServiceLink
 * @property string $eulaUiLink
 * @property carbon $signedDate
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
        'signedDate' => 'carbon',
    ];
}
