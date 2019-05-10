<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Error Version v2019_2
 *
 * Model for Error
 *
 * @property string $code
 * @property string $message
 * @property array $errors
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
        'message' => 'string',
        'errors' => 'array',
    ];
}
