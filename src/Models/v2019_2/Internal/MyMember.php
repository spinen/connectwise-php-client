<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MyMember
 *
 * @property integer $id
 * @property string $identifier
 * @property string $password
 * @property string $firstName
 * @property string $middleInitial
 * @property string $lastName
 * @property string $title
 * @property string $licenseClass
 * @property boolean $disableOnlineFlag
 * @property boolean $enableMobileFlag
 * @property string $employeeIdentifer
 * @property string $vendorNumber
 * @property string $notes
 * @property array $serviceBoardTeamIds
 * @property boolean $enableMobileGpsFlag
 * @property carbon $inactiveDate
 * @property boolean $inactiveFlag
 * @property string $lastLogin
 * @property boolean $toastNotificationFlag
 * @property string $officeEmail
 * @property string $officePhone
 * @property string $officeExtension
 * @property string $mobileEmail
 * @property string $mobilePhone
 * @property string $mobileExtension
 * @property string $homeEmail
 * @property string $homePhone
 * @property string $homeExtension
 * @property string $defaultEmail
 * @property string $defaultPhone
 * @property boolean $adminFlag
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property double $billableForecast
 * @property double $dailyCapacity
 * @property double $hourlyCost
 * @property double $hourlyRate
 * @property boolean $includeInUtilizationReportingFlag
 * @property boolean $requireExpenseEntryFlag
 * @property boolean $requireTimeSheetEntryFlag
 * @property boolean $requireStartAndEndTimeOnTimeEntryFlag
 * @property boolean $allowInCellEntryOnTimeSheet
 * @property boolean $enterTimeAgainstCompanyFlag
 * @property boolean $allowExpensesEnteredAgainstCompaniesFlag
 * @property boolean $timeReminderEmailFlag
 * @property integer $daysTolerance
 * @property double $minimumHours
 * @property carbon $timeSheetStartDate
 * @property carbon $hireDate
 * @property boolean $restrictServiceDefaultLocationFlag
 * @property boolean $restrictServiceDefaultDepartmentFlag
 * @property array $excludedServiceBoardIds
 * @property boolean $restrictProjectDefaultLocationFlag
 * @property boolean $restrictProjectDefaultDepartmentFlag
 * @property array $excludedProjectBoardIds
 * @property double $scheduleCapacity
 * @property boolean $restrictScheduleFlag
 * @property boolean $hideMemberInDispatchPortalFlag
 * @property boolean $restrictDefaultSalesTerritoryFlag
 * @property boolean $restrictDefaultWarehouseFlag
 * @property boolean $restrictDefaultWarehouseBinFlag
 * @property string $mapiName
 * @property boolean $calendarSyncIntegrationFlag
 * @property boolean $enableLdapAuthenticationFlag
 * @property string $ldapUserName
 * @property string $companyActivityTabFormat
 * @property string $invoiceTimeTabFormat
 * @property string $invoiceScreenDefaultTabFormat
 * @property string $invoicingDisplayOptions
 * @property string $agreementInvoicingDisplayOptions
 * @property string $corelyticsUsername
 * @property string $corelyticsPassword
 * @property string $remotePackage
 * @property string $remotePackagePlatform
 * @property string $remotePackageUserName
 * @property string $remotePackagePassword
 * @property string $remotePackageAccount
 * @property string $authenticationServiceType
 * @property boolean $timebasedOneTimePasswordActivated
 */
class MyMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'password' => 'string',
        'firstName' => 'string',
        'middleInitial' => 'string',
        'lastName' => 'string',
        'title' => 'string',
        'licenseClass' => 'string',
        'disableOnlineFlag' => 'boolean',
        'enableMobileFlag' => 'boolean',
        'employeeIdentifer' => 'string',
        'vendorNumber' => 'string',
        'notes' => 'string',
        'serviceBoardTeamIds' => 'array',
        'enableMobileGpsFlag' => 'boolean',
        'inactiveDate' => 'carbon',
        'inactiveFlag' => 'boolean',
        'lastLogin' => 'string',
        'toastNotificationFlag' => 'boolean',
        'officeEmail' => 'string',
        'officePhone' => 'string',
        'officeExtension' => 'string',
        'mobileEmail' => 'string',
        'mobilePhone' => 'string',
        'mobileExtension' => 'string',
        'homeEmail' => 'string',
        'homePhone' => 'string',
        'homeExtension' => 'string',
        'defaultEmail' => 'string',
        'defaultPhone' => 'string',
        'adminFlag' => 'boolean',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'billableForecast' => 'double',
        'dailyCapacity' => 'double',
        'hourlyCost' => 'double',
        'hourlyRate' => 'double',
        'includeInUtilizationReportingFlag' => 'boolean',
        'requireExpenseEntryFlag' => 'boolean',
        'requireTimeSheetEntryFlag' => 'boolean',
        'requireStartAndEndTimeOnTimeEntryFlag' => 'boolean',
        'allowInCellEntryOnTimeSheet' => 'boolean',
        'enterTimeAgainstCompanyFlag' => 'boolean',
        'allowExpensesEnteredAgainstCompaniesFlag' => 'boolean',
        'timeReminderEmailFlag' => 'boolean',
        'daysTolerance' => 'integer',
        'minimumHours' => 'double',
        'timeSheetStartDate' => 'carbon',
        'hireDate' => 'carbon',
        'restrictServiceDefaultLocationFlag' => 'boolean',
        'restrictServiceDefaultDepartmentFlag' => 'boolean',
        'excludedServiceBoardIds' => 'array',
        'restrictProjectDefaultLocationFlag' => 'boolean',
        'restrictProjectDefaultDepartmentFlag' => 'boolean',
        'excludedProjectBoardIds' => 'array',
        'scheduleCapacity' => 'double',
        'restrictScheduleFlag' => 'boolean',
        'hideMemberInDispatchPortalFlag' => 'boolean',
        'restrictDefaultSalesTerritoryFlag' => 'boolean',
        'restrictDefaultWarehouseFlag' => 'boolean',
        'restrictDefaultWarehouseBinFlag' => 'boolean',
        'mapiName' => 'string',
        'calendarSyncIntegrationFlag' => 'boolean',
        'enableLdapAuthenticationFlag' => 'boolean',
        'ldapUserName' => 'string',
        'companyActivityTabFormat' => 'string',
        'invoiceTimeTabFormat' => 'string',
        'invoiceScreenDefaultTabFormat' => 'string',
        'invoicingDisplayOptions' => 'string',
        'agreementInvoicingDisplayOptions' => 'string',
        'corelyticsUsername' => 'string',
        'corelyticsPassword' => 'string',
        'remotePackage' => 'string',
        'remotePackagePlatform' => 'string',
        'remotePackageUserName' => 'string',
        'remotePackagePassword' => 'string',
        'remotePackageAccount' => 'string',
        'authenticationServiceType' => 'string',
        'timebasedOneTimePasswordActivated' => 'boolean',
    ];
}
