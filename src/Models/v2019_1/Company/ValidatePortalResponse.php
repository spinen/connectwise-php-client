<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ValidatePortalResponse Version v2019_1
 *
 * Model for ValidatePortalResponse
 *
 * @property boolean $success
 * @property integer $contactId
 */
class ValidatePortalResponse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'success' => 'boolean',
        'contactId' => 'integer',
    ];
}
