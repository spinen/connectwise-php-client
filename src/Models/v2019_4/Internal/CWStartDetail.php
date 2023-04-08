<?php

namespace Spinen\ConnectWise\Models\v2019_4\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CWStartDetail Version v2019_4
 *
 * Model for CWStartDetail
 *
 * @property Carbon $goLiveDate
 * @property Metadata $_info
 * @property bool $crmFlag
 * @property bool $teamsAudioVisualFlag
 * @property bool $teamsCloudServiceProviderFlag
 * @property bool $teamsInternalItFlag
 * @property bool $teamsManagedSecurityFlag
 * @property bool $teamsManagedServicesFlag
 * @property bool $teamsPhysicalSecurityFlag
 * @property bool $teamsValueAddedResellerFlag
 * @property bool $ticketingFlag
 * @property bool $timeTrackingFlag
 * @property int $id
 */
class CWStartDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'crmFlag' => 'boolean',
        'goLiveDate' => Carbon::class,
        'id' => 'integer',
        'teamsAudioVisualFlag' => 'boolean',
        'teamsCloudServiceProviderFlag' => 'boolean',
        'teamsInternalItFlag' => 'boolean',
        'teamsManagedSecurityFlag' => 'boolean',
        'teamsManagedServicesFlag' => 'boolean',
        'teamsPhysicalSecurityFlag' => 'boolean',
        'teamsValueAddedResellerFlag' => 'boolean',
        'ticketingFlag' => 'boolean',
        'timeTrackingFlag' => 'boolean',
    ];
}
