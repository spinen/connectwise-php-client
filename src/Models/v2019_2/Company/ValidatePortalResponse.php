<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ValidatePortalResponse Version v2019_2
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
        'contactId' => 'integer',
        'success' => 'boolean',
    ];
}
