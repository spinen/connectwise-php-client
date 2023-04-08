<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Service Version v2018_4
 *
 * Model for Service
 *
 * @property CalendarSetupReference $calendarSetup
 * @property Metadata $_info
 * @property bool $allowCCFlag
 * @property bool $allowTOFlag
 * @property bool $contactColorDisableFlag
 * @property bool $headerColorDisableFlag
 * @property bool $hideDelimiterFlag
 * @property bool $memberColorDisableFlag
 * @property bool $unknownColorDisableFlag
 * @property int $id
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
