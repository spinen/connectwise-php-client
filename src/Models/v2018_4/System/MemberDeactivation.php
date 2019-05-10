<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivation Version v2018_4
 *
 * Model for MemberDeactivation
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\DepartmentMananager $departmentManager
 * @property Spinen\ConnectWise\Models\v2018_4\System\DispatchMember $dispatchMember
 * @property Spinen\ConnectWise\Models\v2018_4\System\DutyManager $dutyManager
 * @property Spinen\ConnectWise\Models\v2018_4\System\KnowledgebaseArticle $knowledgeBaseArticle
 * @property Spinen\ConnectWise\Models\v2018_4\System\MyCompanyCOORole $myCompanyCOO
 * @property Spinen\ConnectWise\Models\v2018_4\System\MyCompanyControllerRole $myCompanyController
 * @property Spinen\ConnectWise\Models\v2018_4\System\MyCompanyDispatchRole $myCompanyDispatch
 * @property Spinen\ConnectWise\Models\v2018_4\System\MyCompanyDutyManagerRole $myCompanyDutyManagerRole
 * @property Spinen\ConnectWise\Models\v2018_4\System\MyCompanyPresidentRole $myCompanyPresident
 * @property Spinen\ConnectWise\Models\v2018_4\System\MyCompanyServiceManagerRole $myCompanyServiceManager
 * @property Spinen\ConnectWise\Models\v2018_4\System\Opportunity $opportunity
 * @property Spinen\ConnectWise\Models\v2018_4\System\ProjectManager $projectExpenseApprover
 * @property Spinen\ConnectWise\Models\v2018_4\System\ProjectManager $projectManager
 * @property Spinen\ConnectWise\Models\v2018_4\System\ProjectManager $projectTimeApprover
 * @property Spinen\ConnectWise\Models\v2018_4\System\SalesActivity $activity
 * @property Spinen\ConnectWise\Models\v2018_4\System\SalesTeam $salesTeam
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceManger $serviceManager
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceTeam $serviceTeam
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceTemplate $ticketTemplate
 * @property Spinen\ConnectWise\Models\v2018_4\System\Workflow $workflowEmail
 * @property array $companyTeam
 * @property array $serviceStatusWorkflow
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
        'activity' => 'Spinen\ConnectWise\Models\v2018_4\System\SalesActivity',
        'companyTeam' => 'array',
        'deleteOpenTimeSheetsFlag' => 'boolean',
        'departmentManager' => 'Spinen\ConnectWise\Models\v2018_4\System\DepartmentMananager',
        'dispatchMember' => 'Spinen\ConnectWise\Models\v2018_4\System\DispatchMember',
        'dutyManager' => 'Spinen\ConnectWise\Models\v2018_4\System\DutyManager',
        'knowledgeBaseArticle' => 'Spinen\ConnectWise\Models\v2018_4\System\KnowledgebaseArticle',
        'myCompanyCOO' => 'Spinen\ConnectWise\Models\v2018_4\System\MyCompanyCOORole',
        'myCompanyController' => 'Spinen\ConnectWise\Models\v2018_4\System\MyCompanyControllerRole',
        'myCompanyDispatch' => 'Spinen\ConnectWise\Models\v2018_4\System\MyCompanyDispatchRole',
        'myCompanyDutyManagerRole' => 'Spinen\ConnectWise\Models\v2018_4\System\MyCompanyDutyManagerRole',
        'myCompanyPresident' => 'Spinen\ConnectWise\Models\v2018_4\System\MyCompanyPresidentRole',
        'myCompanyServiceManager' => 'Spinen\ConnectWise\Models\v2018_4\System\MyCompanyServiceManagerRole',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_4\System\Opportunity',
        'projectExpenseApprover' => 'Spinen\ConnectWise\Models\v2018_4\System\ProjectManager',
        'projectManager' => 'Spinen\ConnectWise\Models\v2018_4\System\ProjectManager',
        'projectTimeApprover' => 'Spinen\ConnectWise\Models\v2018_4\System\ProjectManager',
        'salesTeam' => 'Spinen\ConnectWise\Models\v2018_4\System\SalesTeam',
        'serviceManager' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceManger',
        'serviceStatusWorkflow' => 'array',
        'serviceTeam' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceTeam',
        'ticketTemplate' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceTemplate',
        'workflowEmail' => 'Spinen\ConnectWise\Models\v2018_4\System\Workflow',
    ];
}
