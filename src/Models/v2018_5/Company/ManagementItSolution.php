<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementItSolution Version v2018_5
 *
 * Model for ManagementItSolution
 *
 * @property Metadata $_info
 * @property boolean $globalLoginFlag
 * @property boolean $noDisplayFlag
 * @property boolean $overrideLoginLocationFlag
 * @property boolean $overrideWebServiceLocationFlag
 * @property boolean $usingSslFlag
 * @property integer $id
 * @property string $continuumApiPassword
 * @property string $continuumApiUsername
 * @property string $globalLoginPassword
 * @property string $globalLoginUsername
 * @property string $levelApiPassword
 * @property string $levelApiUsername
 * @property string $levelVarDomain
 * @property string $managementItSolutionType
 * @property string $managementServerUrl
 * @property string $managementSolutionName
 * @property string $nAblePassword
 * @property string $nAbleUsername
 * @property string $name
 * @property string $portalOverrideLoginUrl
 * @property string $webserviceOverrideUrl
 */
class ManagementItSolution extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'continuumApiPassword' => 'string',
        'continuumApiUsername' => 'string',
        'globalLoginFlag' => 'boolean',
        'globalLoginPassword' => 'string',
        'globalLoginUsername' => 'string',
        'id' => 'integer',
        'levelApiPassword' => 'string',
        'levelApiUsername' => 'string',
        'levelVarDomain' => 'string',
        'managementItSolutionType' => 'string',
        'managementServerUrl' => 'string',
        'managementSolutionName' => 'string',
        'nAblePassword' => 'string',
        'nAbleUsername' => 'string',
        'name' => 'string',
        'noDisplayFlag' => 'boolean',
        'overrideLoginLocationFlag' => 'boolean',
        'overrideWebServiceLocationFlag' => 'boolean',
        'portalOverrideLoginUrl' => 'string',
        'usingSslFlag' => 'boolean',
        'webserviceOverrideUrl' => 'string'
    ];
}
