<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementBackup Version v2018_5
 *
 * Model for ManagementBackup
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Company\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CatalogItemReference $item
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
 * @property integer $id
 * @property string $billingLevel
 */
class ManagementBackup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
        'billingLevel' => 'string',
        'id' => 'integer',
        'item' => 'Spinen\ConnectWise\Models\v2018_5\Company\CatalogItemReference',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Company\AgreementTypeReference',
    ];
}
