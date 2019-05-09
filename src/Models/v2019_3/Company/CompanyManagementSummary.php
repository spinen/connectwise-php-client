<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyManagementSummary Version v2019_3
 * 
 * Model for CompanyManagementSummary
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Company\ManagementSolutionReference $managementSolution
 * @property string $groupIdentifier
 * @property string $deviceType
 * @property Spinen\ConnectWise\Models\v2019_3\Company\AgreementReference $agreement
 * @property integer $snmpMachines
 * @property integer $totalWorkstations
 * @property integer $totalServers
 * @property integer $totalWindowsServers
 * @property integer $totalWindowsWorkstations
 * @property integer $totalManagedMachines
 * @property integer $serversOffline
 * @property integer $serversDiskSpaceLow
 * @property integer $failedBackupJobs
 * @property integer $totalNotifications
 * @property integer $successfulBackupJobs
 * @property integer $serverAvailability
 * @property integer $virusesRemoved
 * @property integer $spywareItemsRemoved
 * @property integer $windowsPatchesInstalled
 * @property integer $diskCleanups
 * @property integer $diskDefragmentations
 * @property integer $fullyPatchedMachines
 * @property integer $missingOneTwoPatchesMachines
 * @property integer $missingThreeFivePatchesMachines
 * @property integer $missingMoreFivePatchesMachines
 * @property integer $missingUnscannedPatchesMachines
 * @property string $alertsGenerated
 * @property number $internetConnectivity
 * @property integer $diskSpaceCleanedMb
 * @property string $missingSecurityPatches
 * @property number $cpuUtilization
 * @property number $memoryUtilization
 * @property Spinen\ConnectWise\Models\v2019_3\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
 */
class CompanyManagementSummary extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'managementSolution' => 'Spinen\ConnectWise\Models\v2019_3\Company\ManagementSolutionReference',
        'groupIdentifier' => 'string',
        'deviceType' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_3\Company\AgreementReference',
        'snmpMachines' => 'integer',
        'totalWorkstations' => 'integer',
        'totalServers' => 'integer',
        'totalWindowsServers' => 'integer',
        'totalWindowsWorkstations' => 'integer',
        'totalManagedMachines' => 'integer',
        'serversOffline' => 'integer',
        'serversDiskSpaceLow' => 'integer',
        'failedBackupJobs' => 'integer',
        'totalNotifications' => 'integer',
        'successfulBackupJobs' => 'integer',
        'serverAvailability' => 'integer',
        'virusesRemoved' => 'integer',
        'spywareItemsRemoved' => 'integer',
        'windowsPatchesInstalled' => 'integer',
        'diskCleanups' => 'integer',
        'diskDefragmentations' => 'integer',
        'fullyPatchedMachines' => 'integer',
        'missingOneTwoPatchesMachines' => 'integer',
        'missingThreeFivePatchesMachines' => 'integer',
        'missingMoreFivePatchesMachines' => 'integer',
        'missingUnscannedPatchesMachines' => 'integer',
        'alertsGenerated' => 'string',
        'internetConnectivity' => 'number',
        'diskSpaceCleanedMb' => 'integer',
        'missingSecurityPatches' => 'string',
        'cpuUtilization' => 'number',
        'memoryUtilization' => 'number',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Company\CompanyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
    ];
}