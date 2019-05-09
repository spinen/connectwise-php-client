<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationCrossReference Version v2019_1
 * 
 * Model for ManagedDevicesIntegrationCrossReference
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property string $vendorType
 * @property string $vendorLevel
 * @property Spinen\ConnectWise\Models\v2019_1\Company\AgreementTypeReference $agreementType
 * @property Spinen\ConnectWise\Models\v2019_1\Company\IvItemReference $product
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ConfigurationTypeReference $configurationType
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 */
class ManagedDevicesIntegrationCrossReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'managedDevicesIntegration' => 'Spinen\ConnectWise\Models\v2019_1\Company\ManagedDevicesIntegrationReference',
        'vendorType' => 'string',
        'vendorLevel' => 'string',
        'agreementType' => 'Spinen\ConnectWise\Models\v2019_1\Company\AgreementTypeReference',
        'product' => 'Spinen\ConnectWise\Models\v2019_1\Company\IvItemReference',
        'configurationType' => 'Spinen\ConnectWise\Models\v2019_1\Company\ConfigurationTypeReference',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
    ];
}
