<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementItSolutionAgreementInterfaceParameter Version v2019_3
 *
 * Model for ManagementItSolutionAgreementInterfaceParameter
 *
 * @property AgreementTypeReference $agreementType
 * @property IvItemReference $serverProduct
 * @property IvItemReference $spamStatsProduct
 * @property IvItemReference $workstationProduct
 * @property ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property Metadata $_info
 * @property int $id
 */
class ManagementItSolutionAgreementInterfaceParameter extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreementType' => AgreementTypeReference::class,
        'id' => 'integer',
        'managedDevicesIntegration' => ManagedDevicesIntegrationReference::class,
        'serverProduct' => IvItemReference::class,
        'spamStatsProduct' => IvItemReference::class,
        'workstationProduct' => IvItemReference::class,
    ];
}
