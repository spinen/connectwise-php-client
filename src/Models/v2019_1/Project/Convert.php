<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Convert Version v2019_1
 * 
 * Model for Convert
 *
 * @property integer $id
 * @property string $recordType
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ProjectPhaseReference $phase
 * @property string $wbsCode
 */
class Convert extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'recordType' => 'string',
        'project' => 'Spinen\ConnectWise\Models\v2019_1\Project\ProjectReference',
        'phase' => 'Spinen\ConnectWise\Models\v2019_1\Project\ProjectPhaseReference',
        'wbsCode' => 'string',
    ];
}
