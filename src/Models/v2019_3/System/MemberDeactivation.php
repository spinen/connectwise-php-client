<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivation Version v2019_3
 *
 * Model for MemberDeactivation
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationDepartmentMananager $departmentManager
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationDispatchMember $dispatchMember
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationDutyManager $dutyManager
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationKnowledgebaseArticle $knowledgeBaseArticle
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationMyCompanyCOORole $myCompanyCOO
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationMyCompanyControllerRole $myCompanyController
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationMyCompanyDispatchRole $myCompanyDispatch
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationMyCompanyDutyManagerRole $myCompanyDutyManagerRole
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationMyCompanyPresidentRole $myCompanyPresident
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationMyCompanyServiceManagerRole $myCompanyServiceManager
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationOpportunity $opportunity
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationProjectManager $projectExpenseApprover
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationProjectManager $projectManager
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationProjectManager $projectTimeApprover
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationSalesActivity $activity
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationSalesTeam $salesTeam
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationServiceManger $serviceManager
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationServiceTeam $serviceTeam
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationServiceTemplate $ticketTemplate
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationWorkflow $workflowEmail
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
        'activity' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationSalesActivity',
        'companyTeam' => 'array',
        'deleteOpenTimeSheetsFlag' => 'boolean',
        'departmentManager' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationDepartmentMananager',
        'dispatchMember' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationDispatchMember',
        'dutyManager' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationDutyManager',
        'knowledgeBaseArticle' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationKnowledgebaseArticle',
        'myCompanyCOO' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationMyCompanyCOORole',
        'myCompanyController' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationMyCompanyControllerRole',
        'myCompanyDispatch' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationMyCompanyDispatchRole',
        'myCompanyDutyManagerRole' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationMyCompanyDutyManagerRole',
        'myCompanyPresident' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationMyCompanyPresidentRole',
        'myCompanyServiceManager' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationMyCompanyServiceManagerRole',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationOpportunity',
        'projectExpenseApprover' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationProjectManager',
        'projectManager' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationProjectManager',
        'projectTimeApprover' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationProjectManager',
        'salesTeam' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationSalesTeam',
        'serviceManager' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationServiceManger',
        'serviceStatusWorkflow' => 'array',
        'serviceTeam' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationServiceTeam',
        'ticketTemplate' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationServiceTemplate',
        'workflowEmail' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberDeactivationWorkflow',
    ];
}
