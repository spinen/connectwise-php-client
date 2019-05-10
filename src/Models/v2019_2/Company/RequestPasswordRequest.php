<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class RequestPasswordRequest Version v2019_2
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
        'email' => 'string'
    ];
}
