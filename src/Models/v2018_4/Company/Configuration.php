<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Configuration Version v2018_4
 *
 * Model for Configuration
 *
 * @property Carbon\Carbon $installationDate
 * @property Carbon\Carbon $lastBackupDate
 * @property Carbon\Carbon $purchaseDate
 * @property Carbon\Carbon $warrantyExpirationDate
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference $vendor
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ConfigurationStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ConfigurationTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ManufacturerReference $manufacturer
 * @property Spinen\ConnectWise\Models\v2018_4\Company\MemberReference $installedBy
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Company\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2018_4\Company\SiteReference $site
 * @property array $customFields
 * @property array $questions
 * @property boolean $activeFlag
 * @property boolean $billFlag
 * @property boolean $displayVendorFlag
 * @property float $backupBillableSpaceGb
 * @property integer $backupFailed
 * @property integer $backupIncomplete
 * @property integer $backupMonth
 * @property integer $backupRestores
 * @property integer $backupSuccesses
 * @property integer $backupYear
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
 * @property integer $parentConfigurationId
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
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
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_4\Company\ContactReference',
        'cpuSpeed' => 'string',
        'customFields' => 'array',
        'defaultGateway' => 'string',
        'deviceIdentifier' => 'string',
        'displayVendorFlag' => 'boolean',
        'id' => 'integer',
        'installationDate' => 'Carbon\Carbon',
        'installedBy' => 'Spinen\ConnectWise\Models\v2018_4\Company\MemberReference',
        'ipAddress' => 'string',
        'lastBackupDate' => 'Carbon\Carbon',
        'lastLoginName' => 'string',
        'localHardDrives' => 'string',
        'locationId' => 'integer',
        'macAddress' => 'string',
        'managementLink' => 'string',
        'manufacturer' => 'Spinen\ConnectWise\Models\v2018_4\Company\ManufacturerReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_4\Company\Guid',
        'modelNumber' => 'string',
        'name' => 'string',
        'notes' => 'string',
        'osInfo' => 'string',
        'osType' => 'string',
        'parentConfigurationId' => 'integer',
        'purchaseDate' => 'Carbon\Carbon',
        'questions' => 'array',
        'ram' => 'string',
        'remoteLink' => 'string',
        'serialNumber' => 'string',
        'site' => 'Spinen\ConnectWise\Models\v2018_4\Company\SiteReference',
        'sla' => 'Spinen\ConnectWise\Models\v2018_4\Company\SLAReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Company\ConfigurationStatusReference',
        'tagNumber' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2018_4\Company\ConfigurationTypeReference',
        'vendor' => 'Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference',
        'vendorNotes' => 'string',
        'warrantyExpirationDate' => 'Carbon\Carbon',
    ];
}
