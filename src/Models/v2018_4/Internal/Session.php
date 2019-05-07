<?php

namespace Spinen\ConnectWise\Models\v2018_4\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Session
 *
 * @property integer $id
 * @property integer $configurationId
 * @property string $sessionGuid
 */
class Session extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'configurationId' => 'integer',
        'sessionGuid' => 'string',
    ];
}
