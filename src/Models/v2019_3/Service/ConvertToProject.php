<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConvertToProject Version v2019_3
 * 
 * Model for ConvertToProject
 *
 * @property integer $id
 * @property string $recordType
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ProjectPhaseReference $phase
 * @property string $wbsCode
 */
class ConvertToProject extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'recordType' => 'string',
        'project' => 'Spinen\ConnectWise\Models\v2019_3\Service\ProjectReference',
        'phase' => 'Spinen\ConnectWise\Models\v2019_3\Service\ProjectPhaseReference',
        'wbsCode' => 'string',
    ];
}
