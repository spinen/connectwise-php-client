<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BatchRequest Version v2018_5
 *
 * Model for BatchRequest
 *
 * @property Metadata $headers
 * @property array $requests
 * @property string $id
 */
class BatchRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'headers' => Metadata::class,
        'id' => 'string',
        'requests' => 'array',
    ];
}
