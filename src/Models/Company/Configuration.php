<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class Configuration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'                        => 'integer',
        'name'                      => 'string',
        //        'type'                      => 'ConfigurationTypeReference',
        //        'status'                    => 'ConfigurationStatusReference',
        //        'company'                   => 'CompanyReference',
        //        'contact'                   => 'ContactReference',
        //        'site'                      => 'SiteReference',
        'locationId'                => 'integer',
        'businessUnitId'            => 'integer',
        'deviceIdentifier'          => 'string',
        'serialNumber'              => 'string',
        'modelNumber'               => 'string',
        'tagNumber'                 => 'string',
        'purchaseDate'              => 'string',
        'installationDate'          => 'string',
        //        'installedBy'               => 'MemberReference',
        'warrantyExpirationDate'    => 'string',
        'vendorNotes'               => 'string',
        'notes'                     => 'string',
        'macAddress'                => 'string',
        'lastLoginName'             => 'string',
        'billFlag'                  => 'boolean',
        'backupSuccesses'           => 'integer',
        'backupIncomplete'          => 'integer',
        'backupFailed'              => 'integer',
        'backupRestores'            => 'integer',
        'lastBackupDate'            => 'string',
        'backupServerName'          => 'string',
        'backupBillableSpaceGb'     => 'double',
        'backupProtectedDeviceList' => 'string',
        'backupYear'                => 'integer',
        'backupMonth'               => 'integer',
        'ipAddress'                 => 'string',
        'defaultGateway'            => 'string',
        'osType'                    => 'string',
        'osInfo'                    => 'string',
        'cpuSpeed'                  => 'string',
        'ram'                       => 'string',
        'localHardDrives'           => 'string',
        'parentConfigurationId'     => 'integer',
        //        'vendor'                    => 'CompanyReference',
        //        'manufacturer'              => 'ManufacturerReference',
        //        'questions'                 => 'ConfigurationQuestion[]',
        'activeFlag'                => 'boolean',
        'managementLink'            => 'string',
        'remoteLink'                => 'string',
        //        'sla'                       => 'SLAReference',
        //        'mobileGuid'                => 'Guid',
        //        '_info'                     => 'Metadata',
        'displayVendorFlag'         => 'boolean',
        //        'customFields'              => 'CustomFieldValue[]',
    ];
}
