<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketSync Version v2019_2
 * 
 * Model for TicketSync
 *
 * @property integer $id
 * @property string $name
 * @property string $vendorType
 * @property Spinen\ConnectWise\Models\v2019_2\Service\IntegratorLoginReference $integratorLogin
 * @property Spinen\ConnectWise\Models\v2019_2\Service\CompanyReference $company
 * @property string $url
 * @property string $userName
 * @property string $password
 * @property string $psg
 * @property boolean $problemDescriptionFlag
 * @property boolean $internalAnalysisFlag
 * @property boolean $resolutionFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
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
        'integratorLogin' => 'Spinen\ConnectWise\Models\v2019_2\Service\IntegratorLoginReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Service\CompanyReference',
        'url' => 'string',
        'userName' => 'string',
        'password' => 'string',
        'psg' => 'string',
        'problemDescriptionFlag' => 'boolean',
        'internalAnalysisFlag' => 'boolean',
        'resolutionFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
    ];
}
