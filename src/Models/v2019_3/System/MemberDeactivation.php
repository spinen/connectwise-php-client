<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivation Version v2019_3
 *
 * Model for MemberDeactivation
 *
 * @property MemberDeactivationDepartmentMananager $departmentManager
 * @property MemberDeactivationDispatchMember $dispatchMember
 * @property MemberDeactivationDutyManager $dutyManager
 * @property MemberDeactivationKnowledgebaseArticle $knowledgeBaseArticle
 * @property MemberDeactivationMyCompanyCOORole $myCompanyCOO
 * @property MemberDeactivationMyCompanyControllerRole $myCompanyController
 * @property MemberDeactivationMyCompanyDispatchRole $myCompanyDispatch
 * @property MemberDeactivationMyCompanyDutyManagerRole $myCompanyDutyManagerRole
 * @property MemberDeactivationMyCompanyPresidentRole $myCompanyPresident
 * @property MemberDeactivationMyCompanyServiceManagerRole $myCompanyServiceManager
 * @property MemberDeactivationOpportunity $opportunity
 * @property MemberDeactivationProjectManager $projectExpenseApprover
 * @property MemberDeactivationProjectManager $projectManager
 * @property MemberDeactivationProjectManager $projectTimeApprover
 * @property MemberDeactivationSalesActivity $activity
 * @property MemberDeactivationSalesTeam $salesTeam
 * @property MemberDeactivationServiceManger $serviceManager
 * @property MemberDeactivationServiceTeam $serviceTeam
 * @property MemberDeactivationServiceTemplate $ticketTemplate
 * @property MemberDeactivationWorkflow $workflowEmail
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
        'activity' => MemberDeactivationSalesActivity::class,
        'companyTeam' => 'array',
        'deleteOpenTimeSheetsFlag' => 'boolean',
        'departmentManager' => MemberDeactivationDepartmentMananager::class,
        'dispatchMember' => MemberDeactivationDispatchMember::class,
        'dutyManager' => MemberDeactivationDutyManager::class,
        'knowledgeBaseArticle' => MemberDeactivationKnowledgebaseArticle::class,
        'myCompanyCOO' => MemberDeactivationMyCompanyCOORole::class,
        'myCompanyController' => MemberDeactivationMyCompanyControllerRole::class,
        'myCompanyDispatch' => MemberDeactivationMyCompanyDispatchRole::class,
        'myCompanyDutyManagerRole' => MemberDeactivationMyCompanyDutyManagerRole::class,
        'myCompanyPresident' => MemberDeactivationMyCompanyPresidentRole::class,
        'myCompanyServiceManager' => MemberDeactivationMyCompanyServiceManagerRole::class,
        'opportunity' => MemberDeactivationOpportunity::class,
        'projectExpenseApprover' => MemberDeactivationProjectManager::class,
        'projectManager' => MemberDeactivationProjectManager::class,
        'projectTimeApprover' => MemberDeactivationProjectManager::class,
        'salesTeam' => MemberDeactivationSalesTeam::class,
        'serviceManager' => MemberDeactivationServiceManger::class,
        'serviceStatusWorkflow' => 'array',
        'serviceTeam' => MemberDeactivationServiceTeam::class,
        'ticketTemplate' => MemberDeactivationServiceTemplate::class,
        'workflowEmail' => MemberDeactivationWorkflow::class
    ];
}
