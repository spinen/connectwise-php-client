<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivation Version v2018_6
 *
 * Model for MemberDeactivation
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\SalesActivity $activity
 * @property Spinen\ConnectWise\Models\v2018_6\System\ServiceTeam $serviceTeam
 * @property array $companyTeam
 * @property Spinen\ConnectWise\Models\v2018_6\System\Workflow $workflowEmail
 * @property array $serviceStatusWorkflow
 * @property Spinen\ConnectWise\Models\v2018_6\System\ServiceTemplate $ticketTemplate
 * @property Spinen\ConnectWise\Models\v2018_6\System\Opportunity $opportunity
 * @property Spinen\ConnectWise\Models\v2018_6\System\SalesTeam $salesTeam
 * @property Spinen\ConnectWise\Models\v2018_6\System\ProjectManager $projectManager
 * @property Spinen\ConnectWise\Models\v2018_6\System\ProjectManager $projectTimeApprover
 * @property Spinen\ConnectWise\Models\v2018_6\System\ProjectManager $projectExpenseApprover
 * @property Spinen\ConnectWise\Models\v2018_6\System\KnowledgebaseArticle $knowledgeBaseArticle
 * @property Spinen\ConnectWise\Models\v2018_6\System\MyCompanyPresidentRole $myCompanyPresident
 * @property Spinen\ConnectWise\Models\v2018_6\System\MyCompanyCOORole $myCompanyCOO
 * @property Spinen\ConnectWise\Models\v2018_6\System\MyCompanyControllerRole $myCompanyController
 * @property Spinen\ConnectWise\Models\v2018_6\System\MyCompanyDispatchRole $myCompanyDispatch
 * @property Spinen\ConnectWise\Models\v2018_6\System\MyCompanyServiceManagerRole $myCompanyServiceManager
 * @property Spinen\ConnectWise\Models\v2018_6\System\MyCompanyDutyManagerRole $myCompanyDutyManagerRole
 * @property Spinen\ConnectWise\Models\v2018_6\System\DepartmentMananager $departmentManager
 * @property Spinen\ConnectWise\Models\v2018_6\System\DispatchMember $dispatchMember
 * @property Spinen\ConnectWise\Models\v2018_6\System\ServiceManger $serviceManager
 * @property Spinen\ConnectWise\Models\v2018_6\System\DutyManager $dutyManager
 * @property boolean $deleteOpenTimeSheetsFlag
 */
class MemberDeactivation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'activity' => 'Spinen\ConnectWise\Models\v2018_6\System\SalesActivity',
        'serviceTeam' => 'Spinen\ConnectWise\Models\v2018_6\System\ServiceTeam',
        'companyTeam' => 'array',
        'workflowEmail' => 'Spinen\ConnectWise\Models\v2018_6\System\Workflow',
        'serviceStatusWorkflow' => 'array',
        'ticketTemplate' => 'Spinen\ConnectWise\Models\v2018_6\System\ServiceTemplate',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_6\System\Opportunity',
        'salesTeam' => 'Spinen\ConnectWise\Models\v2018_6\System\SalesTeam',
        'projectManager' => 'Spinen\ConnectWise\Models\v2018_6\System\ProjectManager',
        'projectTimeApprover' => 'Spinen\ConnectWise\Models\v2018_6\System\ProjectManager',
        'projectExpenseApprover' => 'Spinen\ConnectWise\Models\v2018_6\System\ProjectManager',
        'knowledgeBaseArticle' => 'Spinen\ConnectWise\Models\v2018_6\System\KnowledgebaseArticle',
        'myCompanyPresident' => 'Spinen\ConnectWise\Models\v2018_6\System\MyCompanyPresidentRole',
        'myCompanyCOO' => 'Spinen\ConnectWise\Models\v2018_6\System\MyCompanyCOORole',
        'myCompanyController' => 'Spinen\ConnectWise\Models\v2018_6\System\MyCompanyControllerRole',
        'myCompanyDispatch' => 'Spinen\ConnectWise\Models\v2018_6\System\MyCompanyDispatchRole',
        'myCompanyServiceManager' => 'Spinen\ConnectWise\Models\v2018_6\System\MyCompanyServiceManagerRole',
        'myCompanyDutyManagerRole' => 'Spinen\ConnectWise\Models\v2018_6\System\MyCompanyDutyManagerRole',
        'departmentManager' => 'Spinen\ConnectWise\Models\v2018_6\System\DepartmentMananager',
        'dispatchMember' => 'Spinen\ConnectWise\Models\v2018_6\System\DispatchMember',
        'serviceManager' => 'Spinen\ConnectWise\Models\v2018_6\System\ServiceManger',
        'dutyManager' => 'Spinen\ConnectWise\Models\v2018_6\System\DutyManager',
        'deleteOpenTimeSheetsFlag' => 'boolean',
    ];
}
