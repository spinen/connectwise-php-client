<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Other
 *
 * @property integer $id
 * @property string $defaultFromAddress
 * @property string $portalUrlOverride
 * @property string $siteUrl
 * @property string $logoPath
 * @property string $contactSync
 * @property boolean $useSslFlag
 * @property boolean $syncLeadsFlag
 * @property boolean $includePortalLinkFlag
 * @property boolean $useExpandedFormatTimeFlag
 * @property boolean $useExpandedFormatActivityFlag
 * @property boolean $updateMemberTimeZonesFlag
 */
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
