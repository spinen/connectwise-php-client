<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ValidationError Version v2018_4
 *
 * Model for ValidationError
 *
 * @property string $code
 * @property string $details
 * @property string $field
 * @property string $message
 * @property string $resource
 */
class ValidationError extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'code' => 'string',
        'details' => 'string',
        'field' => 'string',
        'message' => 'string',
        'resource' => 'string',
    ];
}
