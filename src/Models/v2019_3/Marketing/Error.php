<?php

namespace Spinen\ConnectWise\Models\v2019_3\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Error Version v2019_3
 *
 * Model for Error
 *
 * @property array $errors
 * @property string $code
 * @property string $message
 */
class Error extends Model
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
