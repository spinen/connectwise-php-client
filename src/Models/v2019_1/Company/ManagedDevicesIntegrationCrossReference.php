<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationCrossReference Version v2019_1
 *
 * Model for ManagedDevicesIntegrationCrossReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Company\AgreementTypeReference $agreementType
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ConfigurationTypeReference $configurationType
 * @property Spinen\ConnectWise\Models\v2019_1\Company\IvItemReference $product
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $vendorLevel
 * @property string $vendorType
 */
class ManagedDevicesIntegrationCrossReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
        'agreementType' => 'Spinen\ConnectWise\Models\v2019_1\Company\AgreementTypeReference',
        'configurationType' => 'Spinen\ConnectWise\Models\v2019_1\Company\ConfigurationTypeReference',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'managedDevicesIntegration' => 'Spinen\ConnectWise\Models\v2019_1\Company\ManagedDevicesIntegrationReference',
        'product' => 'Spinen\ConnectWise\Models\v2019_1\Company\IvItemReference',
        'vendorLevel' => 'string',
        'vendorType' => 'string',
    ];
}
