<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EPayConfiguration Version v2018_5
 * 
 * Model for EPayConfiguration
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_5\System\CurrencyReference $currency
 * @property string $url
 * @property string $storeIdentifier
 * @property string $encryptionKey
 * @property string $initializationVector
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class EPayConfiguration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_5\System\CurrencyReference',
        'url' => 'string',
        'storeIdentifier' => 'string',
        'encryptionKey' => 'string',
        'initializationVector' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
