<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplate Version v2019_2
 * 
 * Model for ServiceTemplate
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_2\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceItemReference $item
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceSubTypeReference $subtype
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceLocationReference $serviceLocation
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceSourceReference $source
 * @property Spinen\ConnectWise\Models\v2019_2\Service\PriorityReference $priority
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceTeamReference $team
 * @property Spinen\ConnectWise\Models\v2019_2\Service\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_2\Service\SiteReference $site
 * @property boolean $assignedNotifyFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Service\SystemDepartmentReference $department
 * @property string $summary
 * @property string $problem
 * @property number $hoursBudget
 * @property string $internalAnalysis
 * @property boolean $timeBillableFlag
 * @property boolean $expenseBillableFlag
 * @property string $purchaseOrderNumber
 * @property string $reference
 * @property boolean $BillComplete_Flag
 * @property boolean $billServiceSeparatelyFlag
 * @property number $billingAmount
 * @property boolean $billUnapprovedTimeAndExpensesFlag
 * @property boolean $overrideFlag
 * @property boolean $timeInvoiceFlag
 * @property boolean $expenseInvoiceFlag
 * @property boolean $productInvoiceFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\AgreementReference $agreement
 * @property string $billingMethod
 * @property string $severity
 * @property string $impact
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $assignedBy
 * @property integer $scheduleDaysBefore
 * @property integer $serviceDaysBefore
 * @property boolean $attachScheduleToNewServiceFlag
 * @property boolean $templateFlag
 * @property boolean $emailContactFlag
 * @property boolean $emailResourceFlag
 * @property boolean $emailCCFlag
 * @property string $emailCC
 * @property boolean $restrictDownpaymentFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 */
class ServiceTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'board' => 'Spinen\ConnectWise\Models\v2019_2\Service\BoardReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceTypeReference',
        'item' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceItemReference',
        'subtype' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceSubTypeReference',
        'serviceLocation' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceLocationReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceStatusReference',
        'source' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceSourceReference',
        'priority' => 'Spinen\ConnectWise\Models\v2019_2\Service\PriorityReference',
        'team' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceTeamReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Service\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_2\Service\ContactReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_2\Service\SiteReference',
        'assignedNotifyFlag' => 'boolean',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Service\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Service\SystemDepartmentReference',
        'summary' => 'string',
        'problem' => 'string',
        'hoursBudget' => 'number',
        'internalAnalysis' => 'string',
        'timeBillableFlag' => 'boolean',
        'expenseBillableFlag' => 'boolean',
        'purchaseOrderNumber' => 'string',
        'reference' => 'string',
        'BillComplete_Flag' => 'boolean',
        'billServiceSeparatelyFlag' => 'boolean',
        'billingAmount' => 'number',
        'billUnapprovedTimeAndExpensesFlag' => 'boolean',
        'overrideFlag' => 'boolean',
        'timeInvoiceFlag' => 'boolean',
        'expenseInvoiceFlag' => 'boolean',
        'productInvoiceFlag' => 'boolean',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_2\Service\AgreementReference',
        'billingMethod' => 'string',
        'severity' => 'string',
        'impact' => 'string',
        'assignedBy' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
        'scheduleDaysBefore' => 'integer',
        'serviceDaysBefore' => 'integer',
        'attachScheduleToNewServiceFlag' => 'boolean',
        'templateFlag' => 'boolean',
        'emailContactFlag' => 'boolean',
        'emailResourceFlag' => 'boolean',
        'emailCCFlag' => 'boolean',
        'emailCC' => 'string',
        'restrictDownpaymentFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
    ];
}
