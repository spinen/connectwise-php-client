<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Other Version v2019_2
 * 
 * Model for Other
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\System\LdapConfigurationReference $defaultLdap
 * @property string $defaultFromAddress
 * @property string $portalUrlOverride
 * @property string $siteUrl
 * @property string $logoPath
 * @property string $contactSync
 * @property Spinen\ConnectWise\Models\v2019_2\System\TimeZoneSetupReference $serverTimeZone
 * @property Spinen\ConnectWise\Models\v2019_2\System\CalendarReference $defaultCalendar
 * @property Spinen\ConnectWise\Models\v2019_2\System\AddressFormatReference $defaultAddressFormat
 * @property boolean $useSslFlag
 * @property boolean $syncLeadsFlag
 * @property boolean $includePortalLinkFlag
 * @property boolean $useExpandedFormatTimeFlag
 * @property boolean $useExpandedFormatActivityFlag
 * @property Spinen\ConnectWise\Models\v2019_2\System\LocaleReference $locale
 * @property boolean $updateMemberTimeZonesFlag
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
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
        'defaultLdap' => 'Spinen\ConnectWise\Models\v2019_2\System\LdapConfigurationReference',
        'defaultFromAddress' => 'string',
        'portalUrlOverride' => 'string',
        'siteUrl' => 'string',
        'logoPath' => 'string',
        'contactSync' => 'string',
        'serverTimeZone' => 'Spinen\ConnectWise\Models\v2019_2\System\TimeZoneSetupReference',
        'defaultCalendar' => 'Spinen\ConnectWise\Models\v2019_2\System\CalendarReference',
        'defaultAddressFormat' => 'Spinen\ConnectWise\Models\v2019_2\System\AddressFormatReference',
        'useSslFlag' => 'boolean',
        'syncLeadsFlag' => 'boolean',
        'includePortalLinkFlag' => 'boolean',
        'useExpandedFormatTimeFlag' => 'boolean',
        'useExpandedFormatActivityFlag' => 'boolean',
        'locale' => 'Spinen\ConnectWise\Models\v2019_2\System\LocaleReference',
        'updateMemberTimeZonesFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
