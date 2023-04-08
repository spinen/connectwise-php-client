<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomReport Version v2019_2
 *
 * Model for CustomReport
 *
 * @property Metadata $_info
 * @property bool $agreementFlag
 * @property bool $agreementTypeFlag
 * @property bool $companyFlag
 * @property bool $departmentDefaultFlag
 * @property bool $departmentFlag
 * @property bool $endDateFlag
 * @property bool $generatedFlag
 * @property bool $invoiceFlag
 * @property bool $locationDefaultFlag
 * @property bool $locationFlag
 * @property bool $marketingCampaignFlag
 * @property bool $memberFlag
 * @property bool $oppTypeFlag
 * @property bool $opportunityFlag
 * @property bool $projectFlag
 * @property bool $projectTypeFlag
 * @property bool $serviceBoardDefaultFlag
 * @property bool $serviceBoardFlag
 * @property bool $serviceStatusFlag
 * @property bool $serviceTypeFlag
 * @property bool $startDateFlag
 * @property bool $territoryDefaultFlag
 * @property bool $territoryFlag
 * @property bool $workRoleFlag
 * @property bool $workTypeFlag
 * @property int $agreementParamId
 * @property int $agreementTypeParamId
 * @property int $companyParamId
 * @property int $departmentParamId
 * @property int $endDateParamId
 * @property int $id
 * @property int $invoiceParamId
 * @property int $locationParamId
 * @property int $marketingCampaignParamId
 * @property int $memberParamId
 * @property int $oppTypeParamId
 * @property int $opportunityParamId
 * @property int $projectParamId
 * @property int $projectTypeParamId
 * @property int $serviceBoardParamId
 * @property int $serviceStatusParamId
 * @property int $serviceTypeParamId
 * @property int $startDateParamId
 * @property int $territoryParamId
 * @property int $workRoleParamId
 * @property int $workTypeParamId
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
