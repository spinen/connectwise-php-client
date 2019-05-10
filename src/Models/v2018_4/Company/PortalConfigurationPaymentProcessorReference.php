<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationPaymentProcessorReference Version v2018_4
 *
 * Model for PortalConfigurationPaymentProcessorReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $info
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
        'name' => 'string',
        'info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
    ];
}
