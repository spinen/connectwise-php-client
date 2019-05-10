<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementBackup Version v2018_6
 *
 * Model for ManagementBackup
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Company\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_6\Company\CatalogItemReference $item
 * @property string $billingLevel
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
 */
class ManagementBackup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Company\AgreementTypeReference',
        'item' => 'Spinen\ConnectWise\Models\v2018_6\Company\CatalogItemReference',
        'billingLevel' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
    ];
}
