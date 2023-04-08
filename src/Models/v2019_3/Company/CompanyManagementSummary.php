<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyManagementSummary Version v2019_3
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
 * @property int $diskCleanups
 * @property int $diskDefragmentations
 * @property int $diskSpaceCleanedMb
 * @property int $failedBackupJobs
 * @property int $fullyPatchedMachines
 * @property int $id
 * @property int $missingMoreFivePatchesMachines
 * @property int $missingOneTwoPatchesMachines
 * @property int $missingThreeFivePatchesMachines
 * @property int $missingUnscannedPatchesMachines
 * @property int $serverAvailability
 * @property int $serversDiskSpaceLow
 * @property int $serversOffline
 * @property int $snmpMachines
 * @property int $spywareItemsRemoved
 * @property int $successfulBackupJobs
 * @property int $totalManagedMachines
 * @property int $totalNotifications
 * @property int $totalServers
 * @property int $totalWindowsServers
 * @property int $totalWindowsWorkstations
 * @property int $totalWorkstations
 * @property int $virusesRemoved
 * @property int $windowsPatchesInstalled
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
