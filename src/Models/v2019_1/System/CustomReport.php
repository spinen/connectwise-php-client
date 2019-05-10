<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomReport Version v2019_1
 *
 * Model for CustomReport
 *
 * @property Metadata $_info
 * @property boolean $agreementFlag
 * @property boolean $agreementTypeFlag
 * @property boolean $companyFlag
 * @property boolean $departmentDefaultFlag
 * @property boolean $departmentFlag
 * @property boolean $endDateFlag
 * @property boolean $generatedFlag
 * @property boolean $invoiceFlag
 * @property boolean $locationDefaultFlag
 * @property boolean $locationFlag
 * @property boolean $marketingCampaignFlag
 * @property boolean $memberFlag
 * @property boolean $oppTypeFlag
 * @property boolean $opportunityFlag
 * @property boolean $projectFlag
 * @property boolean $projectTypeFlag
 * @property boolean $serviceBoardDefaultFlag
 * @property boolean $serviceBoardFlag
 * @property boolean $serviceStatusFlag
 * @property boolean $serviceTypeFlag
 * @property boolean $startDateFlag
 * @property boolean $territoryDefaultFlag
 * @property boolean $territoryFlag
 * @property boolean $workRoleFlag
 * @property boolean $workTypeFlag
 * @property integer $agreementParamId
 * @property integer $agreementTypeParamId
 * @property integer $companyParamId
 * @property integer $departmentParamId
 * @property integer $endDateParamId
 * @property integer $id
 * @property integer $invoiceParamId
 * @property integer $locationParamId
 * @property integer $marketingCampaignParamId
 * @property integer $memberParamId
 * @property integer $oppTypeParamId
 * @property integer $opportunityParamId
 * @property integer $projectParamId
 * @property integer $projectTypeParamId
 * @property integer $serviceBoardParamId
 * @property integer $serviceStatusParamId
 * @property integer $serviceTypeParamId
 * @property integer $startDateParamId
 * @property integer $territoryParamId
 * @property integer $workRoleParamId
 * @property integer $workTypeParamId
 * @property string $agreementOverride
 * @property string $agreementTypeOverride
 * @property string $companyOverride
 * @property string $departmentOverride
 * @property string $description
 * @property string $endDateOverride
 * @property string $invoiceOverride
 * @property string $locationOverride
 * @property string $marketingCampaignOverride
 * @property string $memberOverride
 * @property string $module
 * @property string $name
 * @property string $oppTypeOverride
 * @property string $opportunityOverride
 * @property string $parameterNameSeparator
 * @property string $parameterPrefix
 * @property string $parameterSeparator
 * @property string $parameterSuffix
 * @property string $projectOverride
 * @property string $projectTypeOverride
 * @property string $reportLink
 * @property string $serviceBoardOverride
 * @property string $serviceStatusOverride
 * @property string $serviceTypeOverride
 * @property string $startDateOverride
 * @property string $territoryOverride
 * @property string $workRoleOverride
 * @property string $workTypeOverride
 */
class CustomReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreementFlag' => 'boolean',
        'agreementOverride' => 'string',
        'agreementParamId' => 'integer',
        'agreementTypeFlag' => 'boolean',
        'agreementTypeOverride' => 'string',
        'agreementTypeParamId' => 'integer',
        'companyFlag' => 'boolean',
        'companyOverride' => 'string',
        'companyParamId' => 'integer',
        'departmentDefaultFlag' => 'boolean',
        'departmentFlag' => 'boolean',
        'departmentOverride' => 'string',
        'departmentParamId' => 'integer',
        'description' => 'string',
        'endDateFlag' => 'boolean',
        'endDateOverride' => 'string',
        'endDateParamId' => 'integer',
        'generatedFlag' => 'boolean',
        'id' => 'integer',
        'invoiceFlag' => 'boolean',
        'invoiceOverride' => 'string',
        'invoiceParamId' => 'integer',
        'locationDefaultFlag' => 'boolean',
        'locationFlag' => 'boolean',
        'locationOverride' => 'string',
        'locationParamId' => 'integer',
        'marketingCampaignFlag' => 'boolean',
        'marketingCampaignOverride' => 'string',
        'marketingCampaignParamId' => 'integer',
        'memberFlag' => 'boolean',
        'memberOverride' => 'string',
        'memberParamId' => 'integer',
        'module' => 'string',
        'name' => 'string',
        'oppTypeFlag' => 'boolean',
        'oppTypeOverride' => 'string',
        'oppTypeParamId' => 'integer',
        'opportunityFlag' => 'boolean',
        'opportunityOverride' => 'string',
        'opportunityParamId' => 'integer',
        'parameterNameSeparator' => 'string',
        'parameterPrefix' => 'string',
        'parameterSeparator' => 'string',
        'parameterSuffix' => 'string',
        'projectFlag' => 'boolean',
        'projectOverride' => 'string',
        'projectParamId' => 'integer',
        'projectTypeFlag' => 'boolean',
        'projectTypeOverride' => 'string',
        'projectTypeParamId' => 'integer',
        'reportLink' => 'string',
        'serviceBoardDefaultFlag' => 'boolean',
        'serviceBoardFlag' => 'boolean',
        'serviceBoardOverride' => 'string',
        'serviceBoardParamId' => 'integer',
        'serviceStatusFlag' => 'boolean',
        'serviceStatusOverride' => 'string',
        'serviceStatusParamId' => 'integer',
        'serviceTypeFlag' => 'boolean',
        'serviceTypeOverride' => 'string',
        'serviceTypeParamId' => 'integer',
        'startDateFlag' => 'boolean',
        'startDateOverride' => 'string',
        'startDateParamId' => 'integer',
        'territoryDefaultFlag' => 'boolean',
        'territoryFlag' => 'boolean',
        'territoryOverride' => 'string',
        'territoryParamId' => 'integer',
        'workRoleFlag' => 'boolean',
        'workRoleOverride' => 'string',
        'workRoleParamId' => 'integer',
        'workTypeFlag' => 'boolean',
        'workTypeOverride' => 'string',
        'workTypeParamId' => 'integer',
    ];
}
