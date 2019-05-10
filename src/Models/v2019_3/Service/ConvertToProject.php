<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ConvertToProject Version v2019_3
 *
 * Model for ConvertToProject
 *
 * @property ProjectPhaseReference $phase
 * @property ProjectReference $project
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
        'phase' => ProjectPhaseReference::class,
        'project' => ProjectReference::class,
        'recordType' => 'string',
        'wbsCode' => 'string'
    ];
}
