<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplate Version v2019_1
 *
 * Model for ServiceTemplate
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Service\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_1\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_1\Service\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_1\Service\MemberReference $assignedBy
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Service\PriorityReference $priority
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ServiceItemReference $item
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ServiceLocationReference $serviceLocation
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ServiceSourceReference $source
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ServiceSubTypeReference $subtype
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ServiceTeamReference $team
 * @property Spinen\ConnectWise\Models\v2019_1\Service\ServiceTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Service\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_1\Service\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\Service\SystemLocationReference $location
 * @property boolean $BillComplete_Flag
 * @property boolean $assignedNotifyFlag
 * @property boolean $attachScheduleToNewServiceFlag
 * @property boolean $billServiceSeparatelyFlag
 * @property boolean $billUnapprovedTimeAndExpensesFlag
 * @property boolean $emailCCFlag
 * @property boolean $emailContactFlag
 * @property boolean $emailResourceFlag
 * @property boolean $expenseBillableFlag
 * @property boolean $expenseInvoiceFlag
 * @property boolean $overrideFlag
 * @property boolean $productInvoiceFlag
 * @property boolean $restrictDownpaymentFlag
 * @property boolean $templateFlag
 * @property boolean $timeBillableFlag
 * @property boolean $timeInvoiceFlag
 * @property float $billingAmount
 * @property float $hoursBudget
 * @property integer $id
 * @property integer $scheduleDaysBefore
 * @property integer $serviceDaysBefore
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_1\Service\AgreementReference',
        'assignedBy' => 'Spinen\ConnectWise\Models\v2019_1\Service\MemberReference',
        'assignedNotifyFlag' => 'boolean',
        'attachScheduleToNewServiceFlag' => 'boolean',
        'billServiceSeparatelyFlag' => 'boolean',
        'billUnapprovedTimeAndExpensesFlag' => 'boolean',
        'billingAmount' => 'float',
        'billingMethod' => 'string',
        'board' => 'Spinen\ConnectWise\Models\v2019_1\Service\BoardReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Service\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Service\ContactReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\Service\SystemDepartmentReference',
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
        'item' => 'Spinen\ConnectWise\Models\v2019_1\Service\ServiceItemReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Service\SystemLocationReference',
        'name' => 'string',
        'overrideFlag' => 'boolean',
        'priority' => 'Spinen\ConnectWise\Models\v2019_1\Service\PriorityReference',
        'problem' => 'string',
        'productInvoiceFlag' => 'boolean',
        'purchaseOrderNumber' => 'string',
        'reference' => 'string',
        'restrictDownpaymentFlag' => 'boolean',
        'scheduleDaysBefore' => 'integer',
        'serviceDaysBefore' => 'integer',
        'serviceLocation' => 'Spinen\ConnectWise\Models\v2019_1\Service\ServiceLocationReference',
        'severity' => 'string',
        'site' => 'Spinen\ConnectWise\Models\v2019_1\Service\SiteReference',
        'source' => 'Spinen\ConnectWise\Models\v2019_1\Service\ServiceSourceReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Service\ServiceStatusReference',
        'subtype' => 'Spinen\ConnectWise\Models\v2019_1\Service\ServiceSubTypeReference',
        'summary' => 'string',
        'team' => 'Spinen\ConnectWise\Models\v2019_1\Service\ServiceTeamReference',
        'templateFlag' => 'boolean',
        'timeBillableFlag' => 'boolean',
        'timeInvoiceFlag' => 'boolean',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Service\ServiceTypeReference',
    ];
}
