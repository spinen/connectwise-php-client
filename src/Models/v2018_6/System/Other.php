<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Other Version v2018_6
 *
 * Model for Other
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\AddressFormatReference $defaultAddressFormat
 * @property Spinen\ConnectWise\Models\v2018_6\System\CalendarReference $defaultCalendar
 * @property Spinen\ConnectWise\Models\v2018_6\System\LdapConfigurationReference $defaultLdap
 * @property Spinen\ConnectWise\Models\v2018_6\System\LocaleReference $locale
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\System\TimeZoneSetupReference $serverTimeZone
 * @property boolean $includePortalLinkFlag
 * @property boolean $syncLeadsFlag
 * @property boolean $updateMemberTimeZonesFlag
 * @property boolean $useExpandedFormatActivityFlag
 * @property boolean $useExpandedFormatTimeFlag
 * @property boolean $useSslFlag
 * @property integer $id
 * @property string $contactSync
 * @property string $defaultFromAddress
 * @property string $logoPath
 * @property string $portalUrlOverride
 * @property string $siteUrl
 */
class Other extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'contactSync' => 'string',
        'defaultAddressFormat' => 'Spinen\ConnectWise\Models\v2018_6\System\AddressFormatReference',
        'defaultCalendar' => 'Spinen\ConnectWise\Models\v2018_6\System\CalendarReference',
        'defaultFromAddress' => 'string',
        'defaultLdap' => 'Spinen\ConnectWise\Models\v2018_6\System\LdapConfigurationReference',
        'id' => 'integer',
        'includePortalLinkFlag' => 'boolean',
        'locale' => 'Spinen\ConnectWise\Models\v2018_6\System\LocaleReference',
        'logoPath' => 'string',
        'portalUrlOverride' => 'string',
        'serverTimeZone' => 'Spinen\ConnectWise\Models\v2018_6\System\TimeZoneSetupReference',
        'siteUrl' => 'string',
        'syncLeadsFlag' => 'boolean',
        'updateMemberTimeZonesFlag' => 'boolean',
        'useExpandedFormatActivityFlag' => 'boolean',
        'useExpandedFormatTimeFlag' => 'boolean',
        'useSslFlag' => 'boolean',
    ];
}
