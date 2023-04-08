<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxIntegrationInfo Version v2019_5
 *
 * Model for TaxIntegrationInfo
 *
 * @property Metadata $_info
 * @property bool $enabledFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'enabledFlag' => 'boolean',
        'id' => 'integer',
        'taxIntegrationType' => 'string',
    ];
}
