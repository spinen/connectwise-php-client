<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivation Version v2018_4
 *
 * Model for MemberDeactivation
 *
 * @property DepartmentMananager $departmentManager
 * @property DispatchMember $dispatchMember
 * @property DutyManager $dutyManager
 * @property KnowledgebaseArticle $knowledgeBaseArticle
 * @property MyCompanyCOORole $myCompanyCOO
 * @property MyCompanyControllerRole $myCompanyController
 * @property MyCompanyDispatchRole $myCompanyDispatch
 * @property MyCompanyDutyManagerRole $myCompanyDutyManagerRole
 * @property MyCompanyPresidentRole $myCompanyPresident
 * @property MyCompanyServiceManagerRole $myCompanyServiceManager
 * @property Opportunity $opportunity
 * @property ProjectManager $projectExpenseApprover
 * @property ProjectManager $projectManager
 * @property ProjectManager $projectTimeApprover
 * @property SalesActivity $activity
 * @property SalesTeam $salesTeam
 * @property ServiceManger $serviceManager
 * @property ServiceTeam $serviceTeam
 * @property ServiceTemplate $ticketTemplate
 * @property Workflow $workflowEmail
 * @property array $companyTeam
 * @property array $serviceStatusWorkflow
 * @property bool $deleteOpenTimeSheetsFlag
 */
class MemberDeactivation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'activity' => SalesActivity::class,
        'companyTeam' => 'array',
        'deleteOpenTimeSheetsFlag' => 'boolean',
        'departmentManager' => DepartmentMananager::class,
        'dispatchMember' => DispatchMember::class,
        'dutyManager' => DutyManager::class,
        'knowledgeBaseArticle' => KnowledgebaseArticle::class,
        'myCompanyCOO' => MyCompanyCOORole::class,
        'myCompanyController' => MyCompanyControllerRole::class,
        'myCompanyDispatch' => MyCompanyDispatchRole::class,
        'myCompanyDutyManagerRole' => MyCompanyDutyManagerRole::class,
        'myCompanyPresident' => MyCompanyPresidentRole::class,
        'myCompanyServiceManager' => MyCompanyServiceManagerRole::class,
        'opportunity' => Opportunity::class,
        'projectExpenseApprover' => ProjectManager::class,
        'projectManager' => ProjectManager::class,
        'projectTimeApprover' => ProjectManager::class,
        'salesTeam' => SalesTeam::class,
        'serviceManager' => ServiceManger::class,
        'serviceStatusWorkflow' => 'array',
        'serviceTeam' => ServiceTeam::class,
        'ticketTemplate' => ServiceTemplate::class,
        'workflowEmail' => Workflow::class,
    ];
}
