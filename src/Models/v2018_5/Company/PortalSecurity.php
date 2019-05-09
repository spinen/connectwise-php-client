<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalSecurity Version v2018_5
 * 
 * Model for PortalSecurity
 *
 * @property string $identifier
 * @property boolean $enabled
 */
class PortalSecurity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'identifier' => 'string',
        'enabled' => 'boolean',
    ];
}
