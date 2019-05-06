<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

class Configuration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'deviceIdentifier' => 'string',
        'serialNumber' => 'string',
        'modelNumber' => 'string',
        'tagNumber' => 'string',
        'purchaseDate' => 'carbon',
        'installationDate' => 'carbon',
        'warrantyExpirationDate' => 'carbon',
        'vendorNotes' => 'string',
        'notes' => 'string',
        'macAddress' => 'string',
        'lastLoginName' => 'string',
        'billFlag' => 'boolean',
        'backupSuccesses' => 'integer',
        'backupIncomplete' => 'integer',
        'backupFailed' => 'integer',
        'backupRestores' => 'integer',
        'lastBackupDate' => 'carbon',
        'backupServerName' => 'string',
        'backupBillableSpaceGb' => 'double',
        'backupProtectedDeviceList' => 'string',
        'backupYear' => 'integer',
        'backupMonth' => 'integer',
        'ipAddress' => 'string',
        'defaultGateway' => 'string',
        'osType' => 'string',
        'osInfo' => 'string',
        'cpuSpeed' => 'string',
        'ram' => 'string',
        'localHardDrives' => 'string',
        'parentConfigurationId' => 'integer',
        'questions' => 'array',
        'activeFlag' => 'boolean',
        'managementLink' => 'string',
        'remoteLink' => 'string',
        'displayVendorFlag' => 'boolean',
        'customFields' => 'array',
    ];
}
