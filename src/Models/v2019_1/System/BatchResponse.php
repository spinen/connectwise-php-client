<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BatchResponse Version v2019_1
 * 
 * Model for BatchResponse
 *
 * @property string $id
 * @property array $responses
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
