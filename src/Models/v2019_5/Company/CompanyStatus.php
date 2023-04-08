<?php

namespace Spinen\ConnectWise\Models\v2019_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyStatus Version v2019_5
 *
 * Model for CompanyStatus
 *
 * @property Metadata $_info
 * @property TrackReference $track
 * @property bool $cancelOpenTracksFlag
 * @property bool $customNoteFlag
 * @property bool $defaultFlag
 * @property bool $disallowSavingFlag
 * @property bool $inactiveFlag
 * @property bool $notifyFlag
 * @property int $id
 * @property string $name
 * @property string $notificationMessage
 */
class CompanyStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'cancelOpenTracksFlag' => 'boolean',
        'customNoteFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'disallowSavingFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'notificationMessage' => 'string',
        'notifyFlag' => 'boolean',
        'track' => TrackReference::class,
    ];
}
