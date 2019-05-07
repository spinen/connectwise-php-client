<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Configuration
 *
 * @property integer $id
 * @property string $name
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property string $deviceIdentifier
 * @property string $serialNumber
 * @property string $modelNumber
 * @property string $tagNumber
 * @property carbon $purchaseDate
 * @property carbon $installationDate
 * @property carbon $warrantyExpirationDate
 * @property string $vendorNotes
 * @property string $notes
 * @property string $macAddress
 * @property string $lastLoginName
 * @property boolean $billFlag
 * @property integer $backupSuccesses
 * @property integer $backupIncomplete
 * @property integer $backupFailed
 * @property integer $backupRestores
 * @property carbon $lastBackupDate
 * @property string $backupServerName
 * @property double $backupBillableSpaceGb
 * @property string $backupProtectedDeviceList
 * @property integer $backupYear
 * @property integer $backupMonth
 * @property string $ipAddress
 * @property string $defaultGateway
 * @property string $osType
 * @property string $osInfo
 * @property string $cpuSpeed
 * @property string $ram
 * @property string $localHardDrives
 * @property integer $parentConfigurationId
 * @property array $questions
 * @property boolean $activeFlag
 * @property string $managementLink
 * @property string $remoteLink
 * @property boolean $displayVendorFlag
 * @property array $customFields
 */
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
