<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxIntegrationInfo Version v2019_1
 * 
 * Model for TaxIntegrationInfo
 *
 * @property integer $id
 * @property boolean $enabledFlag
 * @property string $taxIntegrationType
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 */
class TaxIntegrationInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'enabledFlag' => 'boolean',
        'taxIntegrationType' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}
