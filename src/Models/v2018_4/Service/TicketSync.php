<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketSync
 *
 * @property integer $id
 * @property string $name
 * @property string $vendorType
 * @property string $url
 * @property string $userName
 * @property string $password
 * @property string $psg
 * @property boolean $problemDescriptionFlag
 * @property boolean $internalAnalysisFlag
 * @property boolean $resolutionFlag
 */
class TicketSync extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'vendorType' => 'string',
        'url' => 'string',
        'userName' => 'string',
        'password' => 'string',
        'psg' => 'string',
        'problemDescriptionFlag' => 'boolean',
        'internalAnalysisFlag' => 'boolean',
        'resolutionFlag' => 'boolean',
    ];
}
