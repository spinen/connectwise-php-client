<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ErrorResponseMessage Version v2019_2
 *
 * Model for ErrorResponseMessage
 *
 * @property array $errors
 * @property string $code
 * @property string $message
 */
class ErrorResponseMessage extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'code' => 'string',
        'errors' => 'array',
        'message' => 'string',
    ];
}
