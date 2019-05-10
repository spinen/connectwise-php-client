<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Service Version v2018_5
 *
 * Model for Service
 *
 * @property CalendarSetupReference $calendarSetup
 * @property Metadata $_info
 * @property boolean $allowCCFlag
 * @property boolean $allowTOFlag
 * @property boolean $contactColorDisableFlag
 * @property boolean $headerColorDisableFlag
 * @property boolean $hideDelimiterFlag
 * @property boolean $memberColorDisableFlag
 * @property boolean $unknownColorDisableFlag
 * @property integer $id
 * @property string $contactColor
 * @property string $headerColor
 * @property string $memberColor
 * @property string $scheduleSpan
 * @property string $srNotify
 * @property string $unknownColor
 */
class Service extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'allowCCFlag' => 'boolean',
        'allowTOFlag' => 'boolean',
        'calendarSetup' => CalendarSetupReference::class,
        'contactColor' => 'string',
        'contactColorDisableFlag' => 'boolean',
        'headerColor' => 'string',
        'headerColorDisableFlag' => 'boolean',
        'hideDelimiterFlag' => 'boolean',
        'id' => 'integer',
        'memberColor' => 'string',
        'memberColorDisableFlag' => 'boolean',
        'scheduleSpan' => 'string',
        'srNotify' => 'string',
        'unknownColor' => 'string',
        'unknownColorDisableFlag' => 'boolean',
    ];
}
