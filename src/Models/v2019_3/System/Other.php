<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Other Version v2019_3
 *
 * Model for Other
 *
 * @property AddressFormatReference $defaultAddressFormat
 * @property CalendarReference $defaultCalendar
 * @property LdapConfigurationReference $defaultLdap
 * @property LocaleReference $locale
 * @property Metadata $_info
 * @property TimeZoneSetupReference $serverTimeZone
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
        '_info' => Metadata::class,
        'contactSync' => 'string',
        'defaultAddressFormat' => AddressFormatReference::class,
        'defaultCalendar' => CalendarReference::class,
        'defaultFromAddress' => 'string',
        'defaultLdap' => LdapConfigurationReference::class,
        'id' => 'integer',
        'includePortalLinkFlag' => 'boolean',
        'locale' => LocaleReference::class,
        'logoPath' => 'string',
        'portalUrlOverride' => 'string',
        'serverTimeZone' => TimeZoneSetupReference::class,
        'siteUrl' => 'string',
        'syncLeadsFlag' => 'boolean',
        'updateMemberTimeZonesFlag' => 'boolean',
        'useExpandedFormatActivityFlag' => 'boolean',
        'useExpandedFormatTimeFlag' => 'boolean',
        'useSslFlag' => 'boolean'
    ];
}
