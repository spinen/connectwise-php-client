<?php

namespace Spinen\ConnectWise\Models\v2019_4\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Convert Version v2019_4
 *
 * Model for Convert
 *
 * @property ProjectPhaseReference $phase
 * @property ProjectReference $project
 * @property int $id
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
        'phase' => ProjectPhaseReference::class,
        'project' => ProjectReference::class,
        'recordType' => 'string',
        'wbsCode' => 'string',
    ];
}
