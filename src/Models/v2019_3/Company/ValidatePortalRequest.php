<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ValidatePortalRequest Version v2019_3
 * 
 * Model for ValidatePortalRequest
 *
 * @property string $email
 * @property string $password
 */
class ValidatePortalRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string',
        'password' => 'string',
    ];
}
