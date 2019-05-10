<?php

namespace Spinen\ConnectWise\Models\v2019_1\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MyMember Version v2019_1
 *
 * Model for MyMember
 *
 * @property Carbon\Carbon $hireDate
 * @property Carbon\Carbon $inactiveDate
 * @property Carbon\Carbon $timeSheetStartDate
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\BoardReference $serviceDefaultBoard
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\CalendarReference $calendar
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\DocumentReference $photo
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\LdapConfigurationReference $ldapConfiguration
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\MemberReference $expenseApprover
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\MemberReference $reportsTo
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\MemberReference $timeApprover
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\MemberTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ProjectBoardReference $projectDefaultBoard
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ReportCardReference $reportCard
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SecurityRoleReference $securityRole
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ServiceLocationReference $serviceLocation
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\StructureReference $structureLevel
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference $defaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference $projectDefaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference $scheduleDefaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference $serviceDefaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference $defaultLocation
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference $projectDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference $salesDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference $scheduleDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference $securityLocation
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference $serviceDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\TimeZoneSetupReference $timeZone
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\WorkTypeReference $workType
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
 * @property boolean $toastNotificationFlag
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
class MyMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Internal\Metadata',
        'adminFlag' => 'boolean',
        'agreementInvoicingDisplayOptions' => 'string',
        'allowExpensesEnteredAgainstCompaniesFlag' => 'boolean',
        'allowInCellEntryOnTimeSheet' => 'boolean',
        'authenticationServiceType' => 'string',
        'billableForecast' => 'float',
        'calendar' => 'Spinen\ConnectWise\Models\v2019_1\Internal\CalendarReference',
        'calendarSyncIntegrationFlag' => 'boolean',
        'companyActivityTabFormat' => 'string',
        'corelyticsPassword' => 'string',
        'corelyticsUsername' => 'string',
        'country' => 'Spinen\ConnectWise\Models\v2019_1\Internal\CountryReference',
        'dailyCapacity' => 'float',
        'daysTolerance' => 'integer',
        'defaultDepartment' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference',
        'defaultEmail' => 'string',
        'defaultLocation' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference',
        'defaultPhone' => 'string',
        'disableOnlineFlag' => 'boolean',
        'employeeIdentifer' => 'string',
        'enableLdapAuthenticationFlag' => 'boolean',
        'enableMobileFlag' => 'boolean',
        'enableMobileGpsFlag' => 'boolean',
        'enterTimeAgainstCompanyFlag' => 'boolean',
        'excludedProjectBoardIds' => 'array',
        'excludedServiceBoardIds' => 'array',
        'expenseApprover' => 'Spinen\ConnectWise\Models\v2019_1\Internal\MemberReference',
        'firstName' => 'string',
        'hideMemberInDispatchPortalFlag' => 'boolean',
        'hireDate' => 'Carbon\Carbon',
        'homeEmail' => 'string',
        'homeExtension' => 'string',
        'homePhone' => 'string',
        'hourlyCost' => 'float',
        'hourlyRate' => 'float',
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveDate' => 'Carbon\Carbon',
        'inactiveFlag' => 'boolean',
        'includeInUtilizationReportingFlag' => 'boolean',
        'invoiceScreenDefaultTabFormat' => 'string',
        'invoiceTimeTabFormat' => 'string',
        'invoicingDisplayOptions' => 'string',
        'lastLogin' => 'string',
        'lastName' => 'string',
        'ldapConfiguration' => 'Spinen\ConnectWise\Models\v2019_1\Internal\LdapConfigurationReference',
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
        'photo' => 'Spinen\ConnectWise\Models\v2019_1\Internal\DocumentReference',
        'projectDefaultBoard' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ProjectBoardReference',
        'projectDefaultDepartment' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference',
        'projectDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference',
        'remotePackage' => 'string',
        'remotePackageAccount' => 'string',
        'remotePackagePassword' => 'string',
        'remotePackagePlatform' => 'string',
        'remotePackageUserName' => 'string',
        'reportCard' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ReportCardReference',
        'reportsTo' => 'Spinen\ConnectWise\Models\v2019_1\Internal\MemberReference',
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
        'salesDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference',
        'scheduleCapacity' => 'float',
        'scheduleDefaultDepartment' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference',
        'scheduleDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference',
        'securityLocation' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference',
        'securityRole' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SecurityRoleReference',
        'serviceBoardTeamIds' => 'array',
        'serviceDefaultBoard' => 'Spinen\ConnectWise\Models\v2019_1\Internal\BoardReference',
        'serviceDefaultDepartment' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference',
        'serviceDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference',
        'serviceLocation' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ServiceLocationReference',
        'structureLevel' => 'Spinen\ConnectWise\Models\v2019_1\Internal\StructureReference',
        'timeApprover' => 'Spinen\ConnectWise\Models\v2019_1\Internal\MemberReference',
        'timeReminderEmailFlag' => 'boolean',
        'timeSheetStartDate' => 'Carbon\Carbon',
        'timeZone' => 'Spinen\ConnectWise\Models\v2019_1\Internal\TimeZoneSetupReference',
        'timebasedOneTimePasswordActivated' => 'boolean',
        'title' => 'string',
        'toastNotificationFlag' => 'boolean',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Internal\MemberTypeReference',
        'vendorNumber' => 'string',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_1\Internal\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_1\Internal\WarehouseBinReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_1\Internal\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_1\Internal\WorkTypeReference',
    ];
}
