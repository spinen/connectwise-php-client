<?php

namespace Spinen\ConnectWise\Models\v2018_5\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ValidationError Version v2018_5
 * 
 * Model for ValidationError
 *
 * @property string $code
 * @property string $message
 * @property string $resource
 * @property string $field
 * @property string $details
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
        'message' => 'string',
        'resource' => 'string',
        'field' => 'string',
        'details' => 'string',
    ];
}
