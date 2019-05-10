<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationCrossReference Version v2018_5
 *
 * Model for ManagedDevicesIntegrationCrossReference
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property string $vendorType
 * @property string $vendorLevel
 * @property Spinen\ConnectWise\Models\v2018_5\Company\AgreementTypeReference $agreementType
 * @property Spinen\ConnectWise\Models\v2018_5\Company\IvItemReference $product
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationTypeReference $configurationType
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
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
        'managedDevicesIntegration' => 'Spinen\ConnectWise\Models\v2018_5\Company\ManagedDevicesIntegrationReference',
        'vendorType' => 'string',
        'vendorLevel' => 'string',
        'agreementType' => 'Spinen\ConnectWise\Models\v2018_5\Company\AgreementTypeReference',
        'product' => 'Spinen\ConnectWise\Models\v2018_5\Company\IvItemReference',
        'configurationType' => 'Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationTypeReference',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
    ];
}
