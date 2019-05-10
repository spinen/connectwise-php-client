<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Convert Version v2019_3
 *
 * Model for Convert
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ProjectPhaseReference $phase
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ProjectReference $project
 * @property integer $id
 * @property string $recordType
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
        'phase' => 'Spinen\ConnectWise\Models\v2019_3\Project\ProjectPhaseReference',
        'project' => 'Spinen\ConnectWise\Models\v2019_3\Project\ProjectReference',
        'recordType' => 'string',
        'wbsCode' => 'string',
    ];
}
