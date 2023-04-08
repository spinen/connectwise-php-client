<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Configuration Version v2018_5
 *
 * Model for Configuration
 *
 * @property Carbon $installationDate
 * @property Carbon $lastBackupDate
 * @property Carbon $purchaseDate
 * @property Carbon $warrantyExpirationDate
 * @property CompanyReference $company
 * @property CompanyReference $vendor
 * @property ConfigurationStatusReference $status
 * @property ConfigurationTypeReference $type
 * @property ContactReference $contact
 * @property Guid $mobileGuid
 * @property ManufacturerReference $manufacturer
 * @property MemberReference $installedBy
 * @property Metadata $_info
 * @property SLAReference $sla
 * @property SiteReference $site
 * @property array $customFields
 * @property array $questions
 * @property bool $activeFlag
 * @property bool $billFlag
 * @property bool $displayVendorFlag
 * @property float $backupBillableSpaceGb
 * @property int $backupFailed
 * @property int $backupIncomplete
 * @property int $backupMonth
 * @property int $backupRestores
 * @property int $backupSuccesses
 * @property int $backupYear
 * @property int $businessUnitId
 * @property int $id
 * @property int $locationId
 * @property int $parentConfigurationId
 * @property string $backupProtectedDeviceList
 * @property string $backupServerName
 * @property string $cpuSpeed
 * @property string $defaultGateway
 * @property string $deviceIdentifier
 * @property string $ipAddress
 * @property string $lastLoginName
 * @property string $localHardDrives
 * @property string $macAddress
 * @property string $managementLink
 * @property string $modelNumber
 * @property string $name
 * @property string $notes
 * @property string $osInfo
 * @property string $osType
 * @property string $ram
 * @property string $remoteLink
 * @property string $serialNumber
 * @property string $tagNumber
 * @property string $vendorNotes
 */
class Configuration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'activeFlag' => 'boolean',
        'backupBillableSpaceGb' => 'float',
        'backupFailed' => 'integer',
        'backupIncomplete' => 'integer',
        'backupMonth' => 'integer',
        'backupProtectedDeviceList' => 'string',
        'backupRestores' => 'integer',
        'backupServerName' => 'string',
        'backupSuccesses' => 'integer',
        'backupYear' => 'integer',
        'billFlag' => 'boolean',
        'businessUnitId' => 'integer',
        'company' => CompanyReference::class,
        'contact' => ContactReference::class,
        'cpuSpeed' => 'string',
        'customFields' => 'array',
        'defaultGateway' => 'string',
        'deviceIdentifier' => 'string',
        'displayVendorFlag' => 'boolean',
        'id' => 'integer',
        'installationDate' => Carbon::class,
        'installedBy' => MemberReference::class,
        'ipAddress' => 'string',
        'lastBackupDate' => Carbon::class,
        'lastLoginName' => 'string',
        'localHardDrives' => 'string',
        'locationId' => 'integer',
        'macAddress' => 'string',
        'managementLink' => 'string',
        'manufacturer' => ManufacturerReference::class,
        'mobileGuid' => Guid::class,
        'modelNumber' => 'string',
        'name' => 'string',
        'notes' => 'string',
        'osInfo' => 'string',
        'osType' => 'string',
        'parentConfigurationId' => 'integer',
        'purchaseDate' => Carbon::class,
        'questions' => 'array',
        'ram' => 'string',
        'remoteLink' => 'string',
        'serialNumber' => 'string',
        'site' => SiteReference::class,
        'sla' => SLAReference::class,
        'status' => ConfigurationStatusReference::class,
        'tagNumber' => 'string',
        'type' => ConfigurationTypeReference::class,
        'vendor' => CompanyReference::class,
        'vendorNotes' => 'string',
        'warrantyExpirationDate' => Carbon::class,
    ];
}
