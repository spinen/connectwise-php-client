<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementItSolutionAgreementInterfaceParameter Version v2019_3
 * 
 * Model for ManagementItSolutionAgreementInterfaceParameter
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Company\ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property Spinen\ConnectWise\Models\v2019_3\Company\AgreementTypeReference $agreementType
 * @property Spinen\ConnectWise\Models\v2019_3\Company\IvItemReference $serverProduct
 * @property Spinen\ConnectWise\Models\v2019_3\Company\IvItemReference $workstationProduct
 * @property Spinen\ConnectWise\Models\v2019_3\Company\IvItemReference $spamStatsProduct
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
 */
class ManagementItSolutionAgreementInterfaceParameter extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'managedDevicesIntegration' => 'Spinen\ConnectWise\Models\v2019_3\Company\ManagedDevicesIntegrationReference',
        'agreementType' => 'Spinen\ConnectWise\Models\v2019_3\Company\AgreementTypeReference',
        'serverProduct' => 'Spinen\ConnectWise\Models\v2019_3\Company\IvItemReference',
        'workstationProduct' => 'Spinen\ConnectWise\Models\v2019_3\Company\IvItemReference',
        'spamStatsProduct' => 'Spinen\ConnectWise\Models\v2019_3\Company\IvItemReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
    ];
}
