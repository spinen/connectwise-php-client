<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyManagementSummaryReport
 *
 * @property integer $id
 * @property string $groupIdentifier
 * @property string $deviceType
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
 * @property double $internetConnectivity
 * @property integer $diskSpaceCleanedMb
 * @property string $missingSecurityPatches
 * @property double $cpuUtilization
 * @property double $memoryUtilization
 */
class CompanyManagementSummaryReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'groupIdentifier' => 'string',
        'deviceType' => 'string',
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
        'internetConnectivity' => 'double',
        'diskSpaceCleanedMb' => 'integer',
        'missingSecurityPatches' => 'string',
        'cpuUtilization' => 'double',
        'memoryUtilization' => 'double',
    ];
}
