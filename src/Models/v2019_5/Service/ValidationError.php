<?php

namespace Spinen\ConnectWise\Models\v2019_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ValidationError Version v2019_5
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
