<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketSync Version v2019_3
 *
 * Model for TicketSync
 *
 * @property CompanyReference $company
 * @property IntegratorLoginReference $integratorLogin
 * @property Metadata $_info
 * @property bool $internalAnalysisFlag
 * @property bool $problemDescriptionFlag
 * @property bool $resolutionFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'company' => CompanyReference::class,
        'id' => 'integer',
        'integratorLogin' => IntegratorLoginReference::class,
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
