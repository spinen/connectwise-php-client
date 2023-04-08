<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplate Version v2019_1
 *
 * Model for ServiceTemplate
 *
 * @property AgreementReference $agreement
 * @property BoardReference $board
 * @property CompanyReference $company
 * @property ContactReference $contact
 * @property MemberReference $assignedBy
 * @property Metadata $_info
 * @property PriorityReference $priority
 * @property ServiceItemReference $item
 * @property ServiceLocationReference $serviceLocation
 * @property ServiceSourceReference $source
 * @property ServiceStatusReference $status
 * @property ServiceSubTypeReference $subtype
 * @property ServiceTeamReference $team
 * @property ServiceTypeReference $type
 * @property SiteReference $site
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property bool $BillComplete_Flag
 * @property bool $assignedNotifyFlag
 * @property bool $attachScheduleToNewServiceFlag
 * @property bool $billServiceSeparatelyFlag
 * @property bool $billUnapprovedTimeAndExpensesFlag
 * @property bool $emailCCFlag
 * @property bool $emailContactFlag
 * @property bool $emailResourceFlag
 * @property bool $expenseBillableFlag
 * @property bool $expenseInvoiceFlag
 * @property bool $overrideFlag
 * @property bool $productInvoiceFlag
 * @property bool $restrictDownpaymentFlag
 * @property bool $templateFlag
 * @property bool $timeBillableFlag
 * @property bool $timeInvoiceFlag
 * @property float $billingAmount
 * @property float $hoursBudget
 * @property int $id
 * @property int $scheduleDaysBefore
 * @property int $serviceDaysBefore
 * @property string $billingMethod
 * @property string $emailCC
 * @property string $impact
 * @property string $internalAnalysis
 * @property string $name
 * @property string $problem
 * @property string $purchaseOrderNumber
 * @property string $reference
 * @property string $severity
 * @property string $summary
 */
class ServiceTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'BillComplete_Flag' => 'boolean',
        '_info' => Metadata::class,
        'agreement' => AgreementReference::class,
        'assignedBy' => MemberReference::class,
        'assignedNotifyFlag' => 'boolean',
        'attachScheduleToNewServiceFlag' => 'boolean',
        'billServiceSeparatelyFlag' => 'boolean',
        'billUnapprovedTimeAndExpensesFlag' => 'boolean',
        'billingAmount' => 'float',
        'billingMethod' => 'string',
        'board' => BoardReference::class,
        'company' => CompanyReference::class,
        'contact' => ContactReference::class,
        'department' => SystemDepartmentReference::class,
        'emailCC' => 'string',
        'emailCCFlag' => 'boolean',
        'emailContactFlag' => 'boolean',
        'emailResourceFlag' => 'boolean',
        'expenseBillableFlag' => 'boolean',
        'expenseInvoiceFlag' => 'boolean',
        'hoursBudget' => 'float',
        'id' => 'integer',
        'impact' => 'string',
        'internalAnalysis' => 'string',
        'item' => ServiceItemReference::class,
        'location' => SystemLocationReference::class,
        'name' => 'string',
        'overrideFlag' => 'boolean',
        'priority' => PriorityReference::class,
        'problem' => 'string',
        'productInvoiceFlag' => 'boolean',
        'purchaseOrderNumber' => 'string',
        'reference' => 'string',
        'restrictDownpaymentFlag' => 'boolean',
        'scheduleDaysBefore' => 'integer',
        'serviceDaysBefore' => 'integer',
        'serviceLocation' => ServiceLocationReference::class,
        'severity' => 'string',
        'site' => SiteReference::class,
        'source' => ServiceSourceReference::class,
        'status' => ServiceStatusReference::class,
        'subtype' => ServiceSubTypeReference::class,
        'summary' => 'string',
        'team' => ServiceTeamReference::class,
        'templateFlag' => 'boolean',
        'timeBillableFlag' => 'boolean',
        'timeInvoiceFlag' => 'boolean',
        'type' => ServiceTypeReference::class,
    ];
}
