<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ValidatePortalResponse Version v2018_5
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
