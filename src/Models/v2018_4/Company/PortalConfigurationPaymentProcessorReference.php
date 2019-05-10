<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationPaymentProcessorReference Version v2018_4
 *
 * Model for PortalConfigurationPaymentProcessorReference
 *
 * @property Metadata $info
 * @property integer $id
 * @property string $name
 */
class PortalConfigurationPaymentProcessorReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'info' => Metadata::class,
        'name' => 'string',
    ];
}
