<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Configuration Version v2018_5
 * 
 * Model for Configuration
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_5\Company\SiteReference $site
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property string $deviceIdentifier
 * @property string $serialNumber
 * @property string $modelNumber
 * @property string $tagNumber
 * @property Carbon\Carbon $purchaseDate
 * @property Carbon\Carbon $installationDate
 * @property Spinen\ConnectWise\Models\v2018_5\Company\MemberReference $installedBy
 * @property Carbon\Carbon $warrantyExpirationDate
 * @property string $vendorNotes
 * @property string $notes
 * @property string $macAddress
 * @property string $lastLoginName
 * @property boolean $billFlag
 * @property integer $backupSuccesses
 * @property integer $backupIncomplete
 * @property integer $backupFailed
 * @property integer $backupRestores
 * @property Carbon\Carbon $lastBackupDate
 * @property string $backupServerName
 * @property float $backupBillableSpaceGb
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
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference $vendor
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ManufacturerReference $manufacturer
 * @property array $questions
 * @property boolean $activeFlag
 * @property string $managementLink
 * @property string $remoteLink
 * @property Spinen\ConnectWise\Models\v2018_5\Company\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationTypeReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationStatusReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_5\Company\ContactReference',
        'site' => 'Spinen\ConnectWise\Models\v2018_5\Company\SiteReference',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'deviceIdentifier' => 'string',
        'serialNumber' => 'string',
        'modelNumber' => 'string',
        'tagNumber' => 'string',
        'purchaseDate' => 'Carbon\Carbon',
        'installationDate' => 'Carbon\Carbon',
        'installedBy' => 'Spinen\ConnectWise\Models\v2018_5\Company\MemberReference',
        'warrantyExpirationDate' => 'Carbon\Carbon',
        'vendorNotes' => 'string',
        'notes' => 'string',
        'macAddress' => 'string',
        'lastLoginName' => 'string',
        'billFlag' => 'boolean',
        'backupSuccesses' => 'integer',
        'backupIncomplete' => 'integer',
        'backupFailed' => 'integer',
        'backupRestores' => 'integer',
        'lastBackupDate' => 'Carbon\Carbon',
        'backupServerName' => 'string',
        'backupBillableSpaceGb' => 'float',
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
        'vendor' => 'Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference',
        'manufacturer' => 'Spinen\ConnectWise\Models\v2018_5\Company\ManufacturerReference',
        'questions' => 'array',
        'activeFlag' => 'boolean',
        'managementLink' => 'string',
        'remoteLink' => 'string',
        'sla' => 'Spinen\ConnectWise\Models\v2018_5\Company\SLAReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Company\Guid',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
        'displayVendorFlag' => 'boolean',
        'customFields' => 'array',
    ];
}
