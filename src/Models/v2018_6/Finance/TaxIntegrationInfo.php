<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxIntegrationInfo Version v2018_6
 *
 * Model for TaxIntegrationInfo
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property boolean $enabledFlag
 * @property integer $id
 * @property string $taxIntegrationType
 */
class TaxIntegrationInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'enabledFlag' => 'boolean',
        'id' => 'integer',
        'taxIntegrationType' => 'string',
    ];
}
