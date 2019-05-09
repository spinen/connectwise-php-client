<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementBackup Version v2018_5
 * 
 * Model for ManagementBackup
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Company\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CatalogItemReference $item
 * @property string $billingLevel
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Company\AgreementTypeReference',
        'item' => 'Spinen\ConnectWise\Models\v2018_5\Company\CatalogItemReference',
        'billingLevel' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
    ];
}
