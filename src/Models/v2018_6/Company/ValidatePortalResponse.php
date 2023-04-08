<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ValidatePortalResponse Version v2018_6
 *
 * Model for ValidatePortalResponse
 *
 * @property bool $success
 * @property int $contactId
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
