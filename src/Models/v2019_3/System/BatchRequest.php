<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BatchRequest Version v2019_3
 * 
 * Model for BatchRequest
 *
 * @property string $id
 * @property array $requests
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $headers
 */
class BatchRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'requests' => 'array',
        'headers' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
