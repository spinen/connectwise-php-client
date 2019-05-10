<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalSecurity Version v2019_3
 *
 * Model for PortalSecurity
 *
 * @property boolean $enabled
 * @property string $identifier
 */
class PortalSecurity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'enabled' => 'boolean',
        'identifier' => 'string'
    ];
}
