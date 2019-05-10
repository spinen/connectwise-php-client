<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementItSolution Version v2019_3
 *
 * Model for ManagementItSolution
 *
 * @property integer $id
 * @property string $name
 * @property string $managementItSolutionType
 * @property string $managementSolutionName
 * @property string $managementServerUrl
 * @property string $webserviceOverrideUrl
 * @property string $portalOverrideLoginUrl
 * @property boolean $globalLoginFlag
 * @property string $globalLoginUsername
 * @property string $globalLoginPassword
 * @property boolean $usingSslFlag
 * @property string $nAbleUsername
 * @property string $nAblePassword
 * @property boolean $overrideWebServiceLocationFlag
 * @property boolean $overrideLoginLocationFlag
 * @property string $continuumApiUsername
 * @property string $continuumApiPassword
 * @property string $levelApiUsername
 * @property string $levelApiPassword
 * @property string $levelVarDomain
 * @property boolean $noDisplayFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
 */
class ManagementItSolution extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'managementItSolutionType' => 'string',
        'managementSolutionName' => 'string',
        'managementServerUrl' => 'string',
        'webserviceOverrideUrl' => 'string',
        'portalOverrideLoginUrl' => 'string',
        'globalLoginFlag' => 'boolean',
        'globalLoginUsername' => 'string',
        'globalLoginPassword' => 'string',
        'usingSslFlag' => 'boolean',
        'nAbleUsername' => 'string',
        'nAblePassword' => 'string',
        'overrideWebServiceLocationFlag' => 'boolean',
        'overrideLoginLocationFlag' => 'boolean',
        'continuumApiUsername' => 'string',
        'continuumApiPassword' => 'string',
        'levelApiUsername' => 'string',
        'levelApiPassword' => 'string',
        'levelVarDomain' => 'string',
        'noDisplayFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
    ];
}
