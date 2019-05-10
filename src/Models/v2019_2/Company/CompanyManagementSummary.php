<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyManagementSummary Version v2019_2
 *
 * Model for CompanyManagementSummary
 *
 * @property AgreementReference $agreement
 * @property CompanyReference $company
 * @property ManagementSolutionReference $managementSolution
 * @property Metadata $_info
 * @property float $cpuUtilization
 * @property float $internetConnectivity
 * @property float $memoryUtilization
 * @property integer $diskCleanups
 * @property integer $diskDefragmentations
 * @property integer $diskSpaceCleanedMb
 * @property integer $failedBackupJobs
 * @property integer $fullyPatchedMachines
 * @property integer $id
 * @property integer $missingMoreFivePatchesMachines
 * @property integer $missingOneTwoPatchesMachines
 * @property integer $missingThreeFivePatchesMachines
 * @property integer $missingUnscannedPatchesMachines
 * @property integer $serverAvailability
 * @property integer $serversDiskSpaceLow
 * @property integer $serversOffline
 * @property integer $snmpMachines
 * @property integer $spywareItemsRemoved
 * @property integer $successfulBackupJobs
 * @property integer $totalManagedMachines
 * @property integer $totalNotifications
 * @property integer $totalServers
 * @property integer $totalWindowsServers
 * @property integer $totalWindowsWorkstations
 * @property integer $totalWorkstations
 * @property integer $virusesRemoved
 * @property integer $windowsPatchesInstalled
 * @property string $alertsGenerated
 * @property string $deviceType
 * @property string $groupIdentifier
 * @property string $missingSecurityPatches
 */
class CompanyManagementSummary extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreement' => AgreementReference::class,
        'alertsGenerated' => 'string',
        'company' => CompanyReference::class,
        'cpuUtilization' => 'float',
        'deviceType' => 'string',
        'diskCleanups' => 'integer',
        'diskDefragmentations' => 'integer',
        'diskSpaceCleanedMb' => 'integer',
        'failedBackupJobs' => 'integer',
        'fullyPatchedMachines' => 'integer',
        'groupIdentifier' => 'string',
        'id' => 'integer',
        'internetConnectivity' => 'float',
        'managementSolution' => ManagementSolutionReference::class,
        'memoryUtilization' => 'float',
        'missingMoreFivePatchesMachines' => 'integer',
        'missingOneTwoPatchesMachines' => 'integer',
        'missingSecurityPatches' => 'string',
        'missingThreeFivePatchesMachines' => 'integer',
        'missingUnscannedPatchesMachines' => 'integer',
        'serverAvailability' => 'integer',
        'serversDiskSpaceLow' => 'integer',
        'serversOffline' => 'integer',
        'snmpMachines' => 'integer',
        'spywareItemsRemoved' => 'integer',
        'successfulBackupJobs' => 'integer',
        'totalManagedMachines' => 'integer',
        'totalNotifications' => 'integer',
        'totalServers' => 'integer',
        'totalWindowsServers' => 'integer',
        'totalWindowsWorkstations' => 'integer',
        'totalWorkstations' => 'integer',
        'virusesRemoved' => 'integer',
        'windowsPatchesInstalled' => 'integer',
    ];
}
