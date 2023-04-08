<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BatchResponse Version v2019_5
 *
 * Model for BatchResponse
 *
 * @property array $responses
 * @property string $id
 */
class BatchResponse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'responses' => 'array',
    ];
}
