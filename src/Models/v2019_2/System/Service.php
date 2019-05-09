<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Service Version v2019_2
 * 
 * Model for Service
 *
 * @property integer $id
 * @property string $srNotify
 * @property string $scheduleSpan
 * @property boolean $hideDelimiterFlag
 * @property boolean $allowCCFlag
 * @property boolean $allowTOFlag
 * @property string $headerColor
 * @property string $memberColor
 * @property string $contactColor
 * @property string $unknownColor
 * @property Spinen\ConnectWise\Models\v2019_2\System\CalendarSetupReference $calendarSetup
 * @property boolean $headerColorDisableFlag
 * @property boolean $memberColorDisableFlag
 * @property boolean $contactColorDisableFlag
 * @property boolean $unknownColorDisableFlag
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class Service extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'srNotify' => 'string',
        'scheduleSpan' => 'string',
        'hideDelimiterFlag' => 'boolean',
        'allowCCFlag' => 'boolean',
        'allowTOFlag' => 'boolean',
        'headerColor' => 'string',
        'memberColor' => 'string',
        'contactColor' => 'string',
        'unknownColor' => 'string',
        'calendarSetup' => 'Spinen\ConnectWise\Models\v2019_2\System\CalendarSetupReference',
        'headerColorDisableFlag' => 'boolean',
        'memberColorDisableFlag' => 'boolean',
        'contactColorDisableFlag' => 'boolean',
        'unknownColorDisableFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
