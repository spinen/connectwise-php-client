<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Other extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'defaultFromAddress' => 'string',
        'portalUrlOverride' => 'string',
        'siteUrl' => 'string',
        'logoPath' => 'string',
        'contactSync' => 'string',
        'useSslFlag' => 'boolean',
        'syncLeadsFlag' => 'boolean',
        'includePortalLinkFlag' => 'boolean',
        'useExpandedFormatTimeFlag' => 'boolean',
        'useExpandedFormatActivityFlag' => 'boolean',
        'updateMemberTimeZonesFlag' => 'boolean',
    ];
}
