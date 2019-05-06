<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

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
