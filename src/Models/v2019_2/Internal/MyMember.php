<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MyMember Version v2019_2
 * 
 * Model for MyMember
 *
 * @property integer $id
 * @property string $identifier
 * @property string $password
 * @property string $firstName
 * @property string $middleInitial
 * @property string $lastName
 * @property string $title
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\ReportCardReference $reportCard
 * @property string $licenseClass
 * @property boolean $disableOnlineFlag
 * @property boolean $enableMobileFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\MemberTypeReference $type
 * @property string $employeeIdentifer
 * @property string $vendorNumber
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\TimeZoneSetupReference $timeZone
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\CountryReference $country
 * @property array $serviceBoardTeamIds
 * @property boolean $enableMobileGpsFlag
 * @property Carbon\Carbon $inactiveDate
 * @property boolean $inactiveFlag
 * @property string $lastLogin
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\DocumentReference $photo
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
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SecurityRoleReference $securityRole
 * @property boolean $adminFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\StructureReference $structureLevel
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference $securityLocation
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference $defaultLocation
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemDepartmentReference $defaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference $reportsTo
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference $timeApprover
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference $expenseApprover
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
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference $serviceDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemDepartmentReference $serviceDefaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\BoardReference $serviceDefaultBoard
 * @property boolean $restrictServiceDefaultLocationFlag
 * @property boolean $restrictServiceDefaultDepartmentFlag
 * @property array $excludedServiceBoardIds
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference $projectDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemDepartmentReference $projectDefaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\ProjectBoardReference $projectDefaultBoard
 * @property boolean $restrictProjectDefaultLocationFlag
 * @property boolean $restrictProjectDefaultDepartmentFlag
 * @property array $excludedProjectBoardIds
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference $scheduleDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemDepartmentReference $scheduleDefaultDepartment
 * @property float $scheduleCapacity
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\ServiceLocationReference $serviceLocation
 * @property boolean $restrictScheduleFlag
 * @property boolean $hideMemberInDispatchPortalFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\CalendarReference $calendar
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference $salesDefaultLocation
 * @property boolean $restrictDefaultSalesTerritoryFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\WarehouseBinReference $warehouseBin
 * @property boolean $restrictDefaultWarehouseFlag
 * @property boolean $restrictDefaultWarehouseBinFlag
 * @property string $mapiName
 * @property boolean $calendarSyncIntegrationFlag
 * @property boolean $enableLdapAuthenticationFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\LdapConfigurationReference $ldapConfiguration
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
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Metadata $_info
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
        'reportCard' => 'Spinen\ConnectWise\Models\v2019_2\Internal\ReportCardReference',
        'licenseClass' => 'string',
        'disableOnlineFlag' => 'boolean',
        'enableMobileFlag' => 'boolean',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Internal\MemberTypeReference',
        'employeeIdentifer' => 'string',
        'vendorNumber' => 'string',
        'notes' => 'string',
        'timeZone' => 'Spinen\ConnectWise\Models\v2019_2\Internal\TimeZoneSetupReference',
        'country' => 'Spinen\ConnectWise\Models\v2019_2\Internal\CountryReference',
        'serviceBoardTeamIds' => 'array',
        'enableMobileGpsFlag' => 'boolean',
        'inactiveDate' => 'Carbon\Carbon',
        'inactiveFlag' => 'boolean',
        'lastLogin' => 'string',
        'photo' => 'Spinen\ConnectWise\Models\v2019_2\Internal\DocumentReference',
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
        'securityRole' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SecurityRoleReference',
        'adminFlag' => 'boolean',
        'structureLevel' => 'Spinen\ConnectWise\Models\v2019_2\Internal\StructureReference',
        'securityLocation' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference',
        'defaultLocation' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference',
        'defaultDepartment' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemDepartmentReference',
        'reportsTo' => 'Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Internal\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_2\Internal\WorkTypeReference',
        'timeApprover' => 'Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference',
        'expenseApprover' => 'Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference',
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
        'serviceDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference',
        'serviceDefaultDepartment' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemDepartmentReference',
        'serviceDefaultBoard' => 'Spinen\ConnectWise\Models\v2019_2\Internal\BoardReference',
        'restrictServiceDefaultLocationFlag' => 'boolean',
        'restrictServiceDefaultDepartmentFlag' => 'boolean',
        'excludedServiceBoardIds' => 'array',
        'projectDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference',
        'projectDefaultDepartment' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemDepartmentReference',
        'projectDefaultBoard' => 'Spinen\ConnectWise\Models\v2019_2\Internal\ProjectBoardReference',
        'restrictProjectDefaultLocationFlag' => 'boolean',
        'restrictProjectDefaultDepartmentFlag' => 'boolean',
        'excludedProjectBoardIds' => 'array',
        'scheduleDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference',
        'scheduleDefaultDepartment' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemDepartmentReference',
        'scheduleCapacity' => 'float',
        'serviceLocation' => 'Spinen\ConnectWise\Models\v2019_2\Internal\ServiceLocationReference',
        'restrictScheduleFlag' => 'boolean',
        'hideMemberInDispatchPortalFlag' => 'boolean',
        'calendar' => 'Spinen\ConnectWise\Models\v2019_2\Internal\CalendarReference',
        'salesDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference',
        'restrictDefaultSalesTerritoryFlag' => 'boolean',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_2\Internal\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_2\Internal\WarehouseBinReference',
        'restrictDefaultWarehouseFlag' => 'boolean',
        'restrictDefaultWarehouseBinFlag' => 'boolean',
        'mapiName' => 'string',
        'calendarSyncIntegrationFlag' => 'boolean',
        'enableLdapAuthenticationFlag' => 'boolean',
        'ldapConfiguration' => 'Spinen\ConnectWise\Models\v2019_2\Internal\LdapConfigurationReference',
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Metadata',
    ];
}
