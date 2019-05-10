<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivation Version v2019_2
 *
 * Model for MemberDeactivation
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationSalesActivity $activity
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationServiceTeam $serviceTeam
 * @property array $companyTeam
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationWorkflow $workflowEmail
 * @property array $serviceStatusWorkflow
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationServiceTemplate $ticketTemplate
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationOpportunity $opportunity
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationSalesTeam $salesTeam
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationProjectManager $projectManager
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationProjectManager $projectTimeApprover
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationProjectManager $projectExpenseApprover
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationKnowledgebaseArticle $knowledgeBaseArticle
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyPresidentRole $myCompanyPresident
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyCOORole $myCompanyCOO
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyControllerRole $myCompanyController
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyDispatchRole $myCompanyDispatch
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyServiceManagerRole $myCompanyServiceManager
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyDutyManagerRole $myCompanyDutyManagerRole
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationDepartmentMananager $departmentManager
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationDispatchMember $dispatchMember
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationServiceManger $serviceManager
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationDutyManager $dutyManager
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
        'activity' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationSalesActivity',
        'serviceTeam' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationServiceTeam',
        'companyTeam' => 'array',
        'workflowEmail' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationWorkflow',
        'serviceStatusWorkflow' => 'array',
        'ticketTemplate' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationServiceTemplate',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationOpportunity',
        'salesTeam' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationSalesTeam',
        'projectManager' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationProjectManager',
        'projectTimeApprover' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationProjectManager',
        'projectExpenseApprover' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationProjectManager',
        'knowledgeBaseArticle' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationKnowledgebaseArticle',
        'myCompanyPresident' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyPresidentRole',
        'myCompanyCOO' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyCOORole',
        'myCompanyController' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyControllerRole',
        'myCompanyDispatch' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyDispatchRole',
        'myCompanyServiceManager' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyServiceManagerRole',
        'myCompanyDutyManagerRole' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyDutyManagerRole',
        'departmentManager' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationDepartmentMananager',
        'dispatchMember' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationDispatchMember',
        'serviceManager' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationServiceManger',
        'dutyManager' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationDutyManager',
        'deleteOpenTimeSheetsFlag' => 'boolean',
    ];
}
