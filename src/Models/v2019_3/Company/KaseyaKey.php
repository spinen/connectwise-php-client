<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KaseyaKey Version v2019_3
 *
 * Model for KaseyaKey
 *
 * @property string $Key
 * @property string $PrivateKey
 */
class KaseyaKey extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'Key' => 'string',
        'PrivateKey' => 'string',
    ];
}
