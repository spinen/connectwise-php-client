<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketSync Version v2019_3
 *
 * Model for TicketSync
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Service\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\Service\IntegratorLoginReference $integratorLogin
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 * @property boolean $internalAnalysisFlag
 * @property boolean $problemDescriptionFlag
 * @property boolean $resolutionFlag
 * @property integer $id
 * @property string $name
 * @property string $password
 * @property string $psg
 * @property string $url
 * @property string $userName
 * @property string $vendorType
 */
class TicketSync extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Service\CompanyReference',
        'id' => 'integer',
        'integratorLogin' => 'Spinen\ConnectWise\Models\v2019_3\Service\IntegratorLoginReference',
        'internalAnalysisFlag' => 'boolean',
        'name' => 'string',
        'password' => 'string',
        'problemDescriptionFlag' => 'boolean',
        'psg' => 'string',
        'resolutionFlag' => 'boolean',
        'url' => 'string',
        'userName' => 'string',
        'vendorType' => 'string',
    ];
}
