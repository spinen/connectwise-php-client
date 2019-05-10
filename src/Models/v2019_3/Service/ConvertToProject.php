<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConvertToProject Version v2019_3
 *
 * Model for ConvertToProject
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ProjectPhaseReference $phase
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ProjectReference $project
 * @property integer $id
 * @property string $recordType
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
        'phase' => 'Spinen\ConnectWise\Models\v2019_3\Service\ProjectPhaseReference',
        'project' => 'Spinen\ConnectWise\Models\v2019_3\Service\ProjectReference',
        'recordType' => 'string',
        'wbsCode' => 'string',
    ];
}
