<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationCrossReference Version v2018_5
 *
 * Model for ManagedDevicesIntegrationCrossReference
 *
 * @property AgreementTypeReference $agreementType
 * @property ConfigurationTypeReference $configurationType
 * @property IvItemReference $product
 * @property ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property Metadata $_info
 * @property bool $inactiveFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'agreementType' => AgreementTypeReference::class,
        'configurationType' => ConfigurationTypeReference::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'managedDevicesIntegration' => ManagedDevicesIntegrationReference::class,
        'product' => IvItemReference::class,
        'vendorLevel' => 'string',
        'vendorType' => 'string',
    ];
}
