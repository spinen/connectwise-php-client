<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Member Version v2018_5
 *
 * Model for Member
 *
 * @property BoardReference $serviceDefaultBoard
 * @property CalendarReference $calendar
 * @property Carbon\Carbon $hireDate
 * @property Carbon\Carbon $inactiveDate
 * @property Carbon\Carbon $timeSheetStartDate
 * @property CountryReference $country
 * @property DocumentReference $photo
 * @property LdapConfigurationReference $ldapConfiguration
 * @property MemberReference $expenseApprover
 * @property MemberReference $reportsTo
 * @property MemberReference $timeApprover
 * @property MemberTypeReference $type
 * @property Metadata $_info
 * @property ProjectBoardReference $projectDefaultBoard
 * @property ReportCardReference $reportCard
 * @property SecurityRoleReference $securityRole
 * @property ServiceLocationReference $serviceLocation
 * @property StructureReference $structureLevel
 * @property SystemDepartmentReference $defaultDepartment
 * @property SystemDepartmentReference $projectDefaultDepartment
 * @property SystemDepartmentReference $scheduleDefaultDepartment
 * @property SystemDepartmentReference $serviceDefaultDepartment
 * @property SystemLocationReference $defaultLocation
 * @property SystemLocationReference $projectDefaultLocation
 * @property SystemLocationReference $salesDefaultLocation
 * @property SystemLocationReference $scheduleDefaultLocation
 * @property SystemLocationReference $securityLocation
 * @property SystemLocationReference $serviceDefaultLocation
 * @property TimeZoneSetupReference $timeZone
 * @property WarehouseBinReference $warehouseBin
 * @property WarehouseReference $warehouse
 * @property WorkRoleReference $workRole
 * @property WorkTypeReference $workType
 * @property array $excludedProjectBoardIds
 * @property array $excludedServiceBoardIds
 * @property array $serviceBoardTeamIds
 * @property boolean $adminFlag
 * @property boolean $allowExpensesEnteredAgainstCompaniesFlag
 * @property boolean $allowInCellEntryOnTimeSheet
 * @property boolean $calendarSyncIntegrationFlag
 * @property boolean $disableOnlineFlag
 * @property boolean $enableLdapAuthenticationFlag
 * @property boolean $enableMobileFlag
 * @property boolean $enableMobileGpsFlag
 * @property boolean $enterTimeAgainstCompanyFlag
 * @property boolean $hideMemberInDispatchPortalFlag
 * @property boolean $inactiveFlag
 * @property boolean $includeInUtilizationReportingFlag
 * @property boolean $requireExpenseEntryFlag
 * @property boolean $requireStartAndEndTimeOnTimeEntryFlag
 * @property boolean $requireTimeSheetEntryFlag
 * @property boolean $restrictDefaultSalesTerritoryFlag
 * @property boolean $restrictDefaultWarehouseBinFlag
 * @property boolean $restrictDefaultWarehouseFlag
 * @property boolean $restrictDepartmentFlag
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictProjectDefaultDepartmentFlag
 * @property boolean $restrictProjectDefaultLocationFlag
 * @property boolean $restrictScheduleFlag
 * @property boolean $restrictServiceDefaultDepartmentFlag
 * @property boolean $restrictServiceDefaultLocationFlag
 * @property boolean $timeReminderEmailFlag
 * @property boolean $timebasedOneTimePasswordActivated
 * @property float $billableForecast
 * @property float $dailyCapacity
 * @property float $hourlyCost
 * @property float $hourlyRate
 * @property float $minimumHours
 * @property float $scheduleCapacity
 * @property integer $daysTolerance
 * @property integer $id
 * @property string $agreementInvoicingDisplayOptions
 * @property string $authenticationServiceType
 * @property string $companyActivityTabFormat
 * @property string $corelyticsPassword
 * @property string $corelyticsUsername
 * @property string $defaultEmail
 * @property string $defaultPhone
 * @property string $employeeIdentifer
 * @property string $firstName
 * @property string $homeEmail
 * @property string $homeExtension
 * @property string $homePhone
 * @property string $identifier
 * @property string $invoiceScreenDefaultTabFormat
 * @property string $invoiceTimeTabFormat
 * @property string $invoicingDisplayOptions
 * @property string $lastLogin
 * @property string $lastName
 * @property string $ldapUserName
 * @property string $licenseClass
 * @property string $mapiName
 * @property string $middleInitial
 * @property string $mobileEmail
 * @property string $mobileExtension
 * @property string $mobilePhone
 * @property string $notes
 * @property string $officeEmail
 * @property string $officeExtension
 * @property string $officePhone
 * @property string $password
 * @property string $remotePackage
 * @property string $remotePackageAccount
 * @property string $remotePackagePassword
 * @property string $remotePackagePlatform
 * @property string $remotePackageUserName
 * @property string $title
 * @property string $vendorNumber
 */
class Member extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'adminFlag' => 'boolean',
        'agreementInvoicingDisplayOptions' => 'string',
        'allowExpensesEnteredAgainstCompaniesFlag' => 'boolean',
        'allowInCellEntryOnTimeSheet' => 'boolean',
        'authenticationServiceType' => 'string',
        'billableForecast' => 'float',
        'calendar' => CalendarReference::class,
        'calendarSyncIntegrationFlag' => 'boolean',
        'companyActivityTabFormat' => 'string',
        'corelyticsPassword' => 'string',
        'corelyticsUsername' => 'string',
        'country' => CountryReference::class,
        'dailyCapacity' => 'float',
        'daysTolerance' => 'integer',
        'defaultDepartment' => SystemDepartmentReference::class,
        'defaultEmail' => 'string',
        'defaultLocation' => SystemLocationReference::class,
        'defaultPhone' => 'string',
        'disableOnlineFlag' => 'boolean',
        'employeeIdentifer' => 'string',
        'enableLdapAuthenticationFlag' => 'boolean',
        'enableMobileFlag' => 'boolean',
        'enableMobileGpsFlag' => 'boolean',
        'enterTimeAgainstCompanyFlag' => 'boolean',
        'excludedProjectBoardIds' => 'array',
        'excludedServiceBoardIds' => 'array',
        'expenseApprover' => MemberReference::class,
        'firstName' => 'string',
        'hideMemberInDispatchPortalFlag' => 'boolean',
        'hireDate' => Carbon\Carbon::class,
        'homeEmail' => 'string',
        'homeExtension' => 'string',
        'homePhone' => 'string',
        'hourlyCost' => 'float',
        'hourlyRate' => 'float',
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveDate' => Carbon\Carbon::class,
        'inactiveFlag' => 'boolean',
        'includeInUtilizationReportingFlag' => 'boolean',
        'invoiceScreenDefaultTabFormat' => 'string',
        'invoiceTimeTabFormat' => 'string',
        'invoicingDisplayOptions' => 'string',
        'lastLogin' => 'string',
        'lastName' => 'string',
        'ldapConfiguration' => LdapConfigurationReference::class,
        'ldapUserName' => 'string',
        'licenseClass' => 'string',
        'mapiName' => 'string',
        'middleInitial' => 'string',
        'minimumHours' => 'float',
        'mobileEmail' => 'string',
        'mobileExtension' => 'string',
        'mobilePhone' => 'string',
        'notes' => 'string',
        'officeEmail' => 'string',
        'officeExtension' => 'string',
        'officePhone' => 'string',
        'password' => 'string',
        'photo' => DocumentReference::class,
        'projectDefaultBoard' => ProjectBoardReference::class,
        'projectDefaultDepartment' => SystemDepartmentReference::class,
        'projectDefaultLocation' => SystemLocationReference::class,
        'remotePackage' => 'string',
        'remotePackageAccount' => 'string',
        'remotePackagePassword' => 'string',
        'remotePackagePlatform' => 'string',
        'remotePackageUserName' => 'string',
        'reportCard' => ReportCardReference::class,
        'reportsTo' => MemberReference::class,
        'requireExpenseEntryFlag' => 'boolean',
        'requireStartAndEndTimeOnTimeEntryFlag' => 'boolean',
        'requireTimeSheetEntryFlag' => 'boolean',
        'restrictDefaultSalesTerritoryFlag' => 'boolean',
        'restrictDefaultWarehouseBinFlag' => 'boolean',
        'restrictDefaultWarehouseFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'restrictLocationFlag' => 'boolean',
        'restrictProjectDefaultDepartmentFlag' => 'boolean',
        'restrictProjectDefaultLocationFlag' => 'boolean',
        'restrictScheduleFlag' => 'boolean',
        'restrictServiceDefaultDepartmentFlag' => 'boolean',
        'restrictServiceDefaultLocationFlag' => 'boolean',
        'salesDefaultLocation' => SystemLocationReference::class,
        'scheduleCapacity' => 'float',
        'scheduleDefaultDepartment' => SystemDepartmentReference::class,
        'scheduleDefaultLocation' => SystemLocationReference::class,
        'securityLocation' => SystemLocationReference::class,
        'securityRole' => SecurityRoleReference::class,
        'serviceBoardTeamIds' => 'array',
        'serviceDefaultBoard' => BoardReference::class,
        'serviceDefaultDepartment' => SystemDepartmentReference::class,
        'serviceDefaultLocation' => SystemLocationReference::class,
        'serviceLocation' => ServiceLocationReference::class,
        'structureLevel' => StructureReference::class,
        'timeApprover' => MemberReference::class,
        'timeReminderEmailFlag' => 'boolean',
        'timeSheetStartDate' => Carbon\Carbon::class,
        'timeZone' => TimeZoneSetupReference::class,
        'timebasedOneTimePasswordActivated' => 'boolean',
        'title' => 'string',
        'type' => MemberTypeReference::class,
        'vendorNumber' => 'string',
        'warehouse' => WarehouseReference::class,
        'warehouseBin' => WarehouseBinReference::class,
        'workRole' => WorkRoleReference::class,
        'workType' => WorkTypeReference::class,
    ];
}
