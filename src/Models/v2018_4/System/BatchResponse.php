<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BatchResponse Version v2018_4
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
