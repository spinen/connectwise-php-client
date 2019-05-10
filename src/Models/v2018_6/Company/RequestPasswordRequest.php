<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RequestPasswordRequest Version v2018_6
 *
 * Model for RequestPasswordRequest
 *
 * @property string $email
 */
class RequestPasswordRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string',
    ];
}
