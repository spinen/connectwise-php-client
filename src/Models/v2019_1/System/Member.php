<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Member Version v2019_1
 * 
 * Model for Member
 *
 * @property integer $id
 * @property string $identifier
 * @property string $password
 * @property string $firstName
 * @property string $middleInitial
 * @property string $lastName
 * @property string $title
 * @property Spinen\ConnectWise\Models\v2019_1\System\ReportCardReference $reportCard
 * @property string $licenseClass
 * @property boolean $disableOnlineFlag
 * @property boolean $enableMobileFlag
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberTypeReference $type
 * @property string $employeeIdentifer
 * @property string $vendorNumber
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_1\System\TimeZoneSetupReference $timeZone
 * @property Spinen\ConnectWise\Models\v2019_1\System\CountryReference $country
 * @property array $serviceBoardTeamIds
 * @property boolean $enableMobileGpsFlag
 * @property Carbon\Carbon $inactiveDate
 * @property boolean $inactiveFlag
 * @property string $lastLogin
 * @property Spinen\ConnectWise\Models\v2019_1\System\DocumentReference $photo
 * @property boolean $partnerPortalFlag
 * @property string $clientId
 * @property string $stsUserAdminUrl
 * @property string $token
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
 * @property Spinen\ConnectWise\Models\v2019_1\System\SecurityRoleReference $securityRole
 * @property boolean $adminFlag
 * @property Spinen\ConnectWise\Models\v2019_1\System\StructureReference $structureLevel
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $securityLocation
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $defaultLocation
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference $defaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $reportsTo
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property Spinen\ConnectWise\Models\v2019_1\System\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_1\System\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $timeApprover
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $expenseApprover
 * @property float $billableForecast
 * @property float $dailyCapacity
 * @property float $hourlyCost
 * @property float $hourlyRate
 * @property boolean $includeInUtilizationReportingFlag
 * @property boolean $requireExpenseEntryFlag
 * @property boolean $requireTimeSheetEntryFlag
 * @property boolean $requireStartAndEndTimeOnTimeEntryFlag
 * @property boolean $allowInCellEntryOnTimeSheet
 * @property boolean $enterTimeAgainstCompanyFlag
 * @property boolean $allowExpensesEnteredAgainstCompaniesFlag
 * @property boolean $timeReminderEmailFlag
 * @property integer $daysTolerance
 * @property float $minimumHours
 * @property Carbon\Carbon $timeSheetStartDate
 * @property Carbon\Carbon $hireDate
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $serviceDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference $serviceDefaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_1\System\BoardReference $serviceDefaultBoard
 * @property boolean $restrictServiceDefaultLocationFlag
 * @property boolean $restrictServiceDefaultDepartmentFlag
 * @property array $excludedServiceBoardIds
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $projectDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference $projectDefaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_1\System\ProjectBoardReference $projectDefaultBoard
 * @property boolean $restrictProjectDefaultLocationFlag
 * @property boolean $restrictProjectDefaultDepartmentFlag
 * @property array $excludedProjectBoardIds
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $scheduleDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference $scheduleDefaultDepartment
 * @property float $scheduleCapacity
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceLocationReference $serviceLocation
 * @property boolean $restrictScheduleFlag
 * @property boolean $hideMemberInDispatchPortalFlag
 * @property Spinen\ConnectWise\Models\v2019_1\System\CalendarReference $calendar
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $salesDefaultLocation
 * @property boolean $restrictDefaultSalesTerritoryFlag
 * @property Spinen\ConnectWise\Models\v2019_1\System\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2019_1\System\WarehouseBinReference $warehouseBin
 * @property boolean $restrictDefaultWarehouseFlag
 * @property boolean $restrictDefaultWarehouseBinFlag
 * @property string $mapiName
 * @property boolean $calendarSyncIntegrationFlag
 * @property boolean $enableLdapAuthenticationFlag
 * @property Spinen\ConnectWise\Models\v2019_1\System\LdapConfigurationReference $ldapConfiguration
 * @property string $ldapUserName
 * @property string $companyActivityTabFormat
 * @property string $invoiceTimeTabFormat
 * @property string $invoiceScreenDefaultTabFormat
 * @property string $invoicingDisplayOptions
 * @property string $agreementInvoicingDisplayOptions
 * @property string $remotePackage
 * @property string $remotePackagePlatform
 * @property string $remotePackageUserName
 * @property string $remotePackagePassword
 * @property string $remotePackageAccount
 * @property string $authenticationServiceType
 * @property boolean $timebasedOneTimePasswordActivated
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 */
class Member extends Model
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
        'reportCard' => 'Spinen\ConnectWise\Models\v2019_1\System\ReportCardReference',
        'licenseClass' => 'string',
        'disableOnlineFlag' => 'boolean',
        'enableMobileFlag' => 'boolean',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberTypeReference',
        'employeeIdentifer' => 'string',
        'vendorNumber' => 'string',
        'notes' => 'string',
        'timeZone' => 'Spinen\ConnectWise\Models\v2019_1\System\TimeZoneSetupReference',
        'country' => 'Spinen\ConnectWise\Models\v2019_1\System\CountryReference',
        'serviceBoardTeamIds' => 'array',
        'enableMobileGpsFlag' => 'boolean',
        'inactiveDate' => 'Carbon\Carbon',
        'inactiveFlag' => 'boolean',
        'lastLogin' => 'string',
        'photo' => 'Spinen\ConnectWise\Models\v2019_1\System\DocumentReference',
        'partnerPortalFlag' => 'boolean',
        'clientId' => 'string',
        'stsUserAdminUrl' => 'string',
        'token' => 'string',
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
        'securityRole' => 'Spinen\ConnectWise\Models\v2019_1\System\SecurityRoleReference',
        'adminFlag' => 'boolean',
        'structureLevel' => 'Spinen\ConnectWise\Models\v2019_1\System\StructureReference',
        'securityLocation' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'defaultLocation' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'defaultDepartment' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference',
        'reportsTo' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_1\System\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_1\System\WorkTypeReference',
        'timeApprover' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'expenseApprover' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'billableForecast' => 'float',
        'dailyCapacity' => 'float',
        'hourlyCost' => 'float',
        'hourlyRate' => 'float',
        'includeInUtilizationReportingFlag' => 'boolean',
        'requireExpenseEntryFlag' => 'boolean',
        'requireTimeSheetEntryFlag' => 'boolean',
        'requireStartAndEndTimeOnTimeEntryFlag' => 'boolean',
        'allowInCellEntryOnTimeSheet' => 'boolean',
        'enterTimeAgainstCompanyFlag' => 'boolean',
        'allowExpensesEnteredAgainstCompaniesFlag' => 'boolean',
        'timeReminderEmailFlag' => 'boolean',
        'daysTolerance' => 'integer',
        'minimumHours' => 'float',
        'timeSheetStartDate' => 'Carbon\Carbon',
        'hireDate' => 'Carbon\Carbon',
        'serviceDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'serviceDefaultDepartment' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference',
        'serviceDefaultBoard' => 'Spinen\ConnectWise\Models\v2019_1\System\BoardReference',
        'restrictServiceDefaultLocationFlag' => 'boolean',
        'restrictServiceDefaultDepartmentFlag' => 'boolean',
        'excludedServiceBoardIds' => 'array',
        'projectDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'projectDefaultDepartment' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference',
        'projectDefaultBoard' => 'Spinen\ConnectWise\Models\v2019_1\System\ProjectBoardReference',
        'restrictProjectDefaultLocationFlag' => 'boolean',
        'restrictProjectDefaultDepartmentFlag' => 'boolean',
        'excludedProjectBoardIds' => 'array',
        'scheduleDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'scheduleDefaultDepartment' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference',
        'scheduleCapacity' => 'float',
        'serviceLocation' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceLocationReference',
        'restrictScheduleFlag' => 'boolean',
        'hideMemberInDispatchPortalFlag' => 'boolean',
        'calendar' => 'Spinen\ConnectWise\Models\v2019_1\System\CalendarReference',
        'salesDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'restrictDefaultSalesTerritoryFlag' => 'boolean',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_1\System\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_1\System\WarehouseBinReference',
        'restrictDefaultWarehouseFlag' => 'boolean',
        'restrictDefaultWarehouseBinFlag' => 'boolean',
        'mapiName' => 'string',
        'calendarSyncIntegrationFlag' => 'boolean',
        'enableLdapAuthenticationFlag' => 'boolean',
        'ldapConfiguration' => 'Spinen\ConnectWise\Models\v2019_1\System\LdapConfigurationReference',
        'ldapUserName' => 'string',
        'companyActivityTabFormat' => 'string',
        'invoiceTimeTabFormat' => 'string',
        'invoiceScreenDefaultTabFormat' => 'string',
        'invoicingDisplayOptions' => 'string',
        'agreementInvoicingDisplayOptions' => 'string',
        'remotePackage' => 'string',
        'remotePackagePlatform' => 'string',
        'remotePackageUserName' => 'string',
        'remotePackagePassword' => 'string',
        'remotePackageAccount' => 'string',
        'authenticationServiceType' => 'string',
        'timebasedOneTimePasswordActivated' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
