<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EPayConfiguration Version v2019_1
 *
 * Model for EPayConfiguration
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $location
 * @property integer $id
 * @property string $encryptionKey
 * @property string $initializationVector
 * @property string $storeIdentifier
 * @property string $url
 */
class EPayConfiguration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\System\CurrencyReference',
        'encryptionKey' => 'string',
        'id' => 'integer',
        'initializationVector' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'storeIdentifier' => 'string',
        'url' => 'string',
    ];
}
