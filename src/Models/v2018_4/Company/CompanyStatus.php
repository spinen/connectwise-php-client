<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyStatus Version v2018_4
 *
 * Model for CompanyStatus
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Company\TrackReference $track
 * @property boolean $cancelOpenTracksFlag
 * @property boolean $customNoteFlag
 * @property boolean $defaultFlag
 * @property boolean $disallowSavingFlag
 * @property boolean $inactiveFlag
 * @property boolean $notifyFlag
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
        'cancelOpenTracksFlag' => 'boolean',
        'customNoteFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'disallowSavingFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'notificationMessage' => 'string',
        'notifyFlag' => 'boolean',
        'track' => 'Spinen\ConnectWise\Models\v2018_4\Company\TrackReference',
    ];
}
