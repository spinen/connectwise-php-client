<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationCrossReference Version v2018_4
 *
 * Model for ManagedDevicesIntegrationCrossReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Company\AgreementTypeReference $agreementType
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ConfigurationTypeReference $configurationType
 * @property Spinen\ConnectWise\Models\v2018_4\Company\IvItemReference $product
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
        'agreementType' => 'Spinen\ConnectWise\Models\v2018_4\Company\AgreementTypeReference',
        'configurationType' => 'Spinen\ConnectWise\Models\v2018_4\Company\ConfigurationTypeReference',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'managedDevicesIntegration' => 'Spinen\ConnectWise\Models\v2018_4\Company\ManagedDevicesIntegrationReference',
        'product' => 'Spinen\ConnectWise\Models\v2018_4\Company\IvItemReference',
        'vendorLevel' => 'string',
        'vendorType' => 'string',
    ];
}
