<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyStatus Version v2018_5
 *
 * Model for CompanyStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $notifyFlag
 * @property boolean $disallowSavingFlag
 * @property string $notificationMessage
 * @property boolean $customNoteFlag
 * @property boolean $cancelOpenTracksFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Company\TrackReference $track
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
 */
class CompanyStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'notifyFlag' => 'boolean',
        'disallowSavingFlag' => 'boolean',
        'notificationMessage' => 'string',
        'customNoteFlag' => 'boolean',
        'cancelOpenTracksFlag' => 'boolean',
        'track' => 'Spinen\ConnectWise\Models\v2018_5\Company\TrackReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
    ];
}
