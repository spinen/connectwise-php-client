<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class CompanyManagementSummaryReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'                              => 'integer',
        //        'managementSolution'              => 'ManagementSolutionReference',
        '* groupIdentifier'               => 'string',
        //        'deviceType'                      => 'Enum',
        //        'agreement'                       => 'AgreementReference',
        'snmpMachines'                    => 'integer',
        'totalWorkstations'               => 'integer',
        'totalServers'                    => 'integer',
        'totalWindowsServers'             => 'integer',
        'totalWindowsWorkstations'        => 'integer',
        'totalManagedMachines'            => 'integer',
        'serversOffline'                  => 'integer',
        'serversDiskSpaceLow'             => 'integer',
        'failedBackupJobs'                => 'integer',
        'totalNotifications'              => 'integer',
        'successfulBackupJobs'            => 'integer',
        'serverAvailability'              => 'integer',
        'virusesRemoved'                  => 'integer',
        'spywareItemsRemoved'             => 'integer',
        'windowsPatchesInstalled'         => 'integer',
        'diskCleanups'                    => 'integer',
        'diskDefragmentations'            => 'integer',
        'fullyPatchedMachines'            => 'integer',
        'missingOneTwoPatchesMachines'    => 'integer',
        'missingThreeFivePatchesMachines' => 'integer',
        'missingMoreFivePatchesMachines'  => 'integer',
        'missingUnscannedPatchesMachines' => 'integer',
        'alertsGenerated'                 => 'string',
        'internetConnectivity'            => 'double',
        'diskSpaceCleanedMb'              => 'integer',
        'missingSecurityPatches'          => 'string',
        'cpuUtilization'                  => 'double',
        'memoryUtilization'               => 'double',
        //        'company'                        => 'CompanyReference',
        //        '_info'                          => 'Metadata',
    ];
}
