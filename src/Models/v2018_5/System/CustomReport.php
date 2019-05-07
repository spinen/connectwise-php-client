<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomReport
 *
 * @property integer $id
 * @property string $reportLink
 * @property string $name
 * @property string $module
 * @property string $description
 * @property boolean $generatedFlag
 * @property string $parameterPrefix
 * @property string $parameterSeparator
 * @property string $parameterNameSeparator
 * @property string $parameterSuffix
 * @property boolean $locationFlag
 * @property integer $locationParamId
 * @property boolean $locationDefaultFlag
 * @property string $locationOverride
 * @property boolean $departmentFlag
 * @property integer $departmentParamId
 * @property boolean $departmentDefaultFlag
 * @property string $departmentOverride
 * @property boolean $territoryFlag
 * @property integer $territoryParamId
 * @property boolean $territoryDefaultFlag
 * @property string $territoryOverride
 * @property boolean $companyFlag
 * @property integer $companyParamId
 * @property string $companyOverride
 * @property boolean $memberFlag
 * @property integer $memberParamId
 * @property string $memberOverride
 * @property boolean $startDateFlag
 * @property integer $startDateParamId
 * @property string $startDateOverride
 * @property boolean $endDateFlag
 * @property integer $endDateParamId
 * @property string $endDateOverride
 * @property boolean $oppTypeFlag
 * @property integer $oppTypeParamId
 * @property string $oppTypeOverride
 * @property boolean $opportunityFlag
 * @property integer $opportunityParamId
 * @property string $opportunityOverride
 * @property boolean $marketingCampaignFlag
 * @property integer $marketingCampaignParamId
 * @property string $marketingCampaignOverride
 * @property boolean $serviceBoardFlag
 * @property integer $serviceBoardParamId
 * @property boolean $serviceBoardDefaultFlag
 * @property string $serviceBoardOverride
 * @property boolean $serviceTypeFlag
 * @property integer $serviceTypeParamId
 * @property string $serviceTypeOverride
 * @property boolean $serviceStatusFlag
 * @property integer $serviceStatusParamId
 * @property string $serviceStatusOverride
 * @property boolean $agreementTypeFlag
 * @property integer $agreementTypeParamId
 * @property string $agreementTypeOverride
 * @property boolean $agreementFlag
 * @property integer $agreementParamId
 * @property string $agreementOverride
 * @property boolean $projectTypeFlag
 * @property integer $projectTypeParamId
 * @property string $projectTypeOverride
 * @property boolean $projectFlag
 * @property integer $projectParamId
 * @property string $projectOverride
 * @property boolean $workRoleFlag
 * @property integer $workRoleParamId
 * @property string $workRoleOverride
 * @property boolean $workTypeFlag
 * @property integer $workTypeParamId
 * @property string $workTypeOverride
 * @property boolean $invoiceFlag
 * @property integer $invoiceParamId
 * @property string $invoiceOverride
 */
class CustomReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'reportLink' => 'string',
        'name' => 'string',
        'module' => 'string',
        'description' => 'string',
        'generatedFlag' => 'boolean',
        'parameterPrefix' => 'string',
        'parameterSeparator' => 'string',
        'parameterNameSeparator' => 'string',
        'parameterSuffix' => 'string',
        'locationFlag' => 'boolean',
        'locationParamId' => 'integer',
        'locationDefaultFlag' => 'boolean',
        'locationOverride' => 'string',
        'departmentFlag' => 'boolean',
        'departmentParamId' => 'integer',
        'departmentDefaultFlag' => 'boolean',
        'departmentOverride' => 'string',
        'territoryFlag' => 'boolean',
        'territoryParamId' => 'integer',
        'territoryDefaultFlag' => 'boolean',
        'territoryOverride' => 'string',
        'companyFlag' => 'boolean',
        'companyParamId' => 'integer',
        'companyOverride' => 'string',
        'memberFlag' => 'boolean',
        'memberParamId' => 'integer',
        'memberOverride' => 'string',
        'startDateFlag' => 'boolean',
        'startDateParamId' => 'integer',
        'startDateOverride' => 'string',
        'endDateFlag' => 'boolean',
        'endDateParamId' => 'integer',
        'endDateOverride' => 'string',
        'oppTypeFlag' => 'boolean',
        'oppTypeParamId' => 'integer',
        'oppTypeOverride' => 'string',
        'opportunityFlag' => 'boolean',
        'opportunityParamId' => 'integer',
        'opportunityOverride' => 'string',
        'marketingCampaignFlag' => 'boolean',
        'marketingCampaignParamId' => 'integer',
        'marketingCampaignOverride' => 'string',
        'serviceBoardFlag' => 'boolean',
        'serviceBoardParamId' => 'integer',
        'serviceBoardDefaultFlag' => 'boolean',
        'serviceBoardOverride' => 'string',
        'serviceTypeFlag' => 'boolean',
        'serviceTypeParamId' => 'integer',
        'serviceTypeOverride' => 'string',
        'serviceStatusFlag' => 'boolean',
        'serviceStatusParamId' => 'integer',
        'serviceStatusOverride' => 'string',
        'agreementTypeFlag' => 'boolean',
        'agreementTypeParamId' => 'integer',
        'agreementTypeOverride' => 'string',
        'agreementFlag' => 'boolean',
        'agreementParamId' => 'integer',
        'agreementOverride' => 'string',
        'projectTypeFlag' => 'boolean',
        'projectTypeParamId' => 'integer',
        'projectTypeOverride' => 'string',
        'projectFlag' => 'boolean',
        'projectParamId' => 'integer',
        'projectOverride' => 'string',
        'workRoleFlag' => 'boolean',
        'workRoleParamId' => 'integer',
        'workRoleOverride' => 'string',
        'workTypeFlag' => 'boolean',
        'workTypeParamId' => 'integer',
        'workTypeOverride' => 'string',
        'invoiceFlag' => 'boolean',
        'invoiceParamId' => 'integer',
        'invoiceOverride' => 'string',
    ];
}
