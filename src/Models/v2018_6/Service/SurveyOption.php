<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyOption
 *
 * @property integer $id
 * @property string $caption
 * @property integer $points
 * @property boolean $visibleflag
 */
class SurveyOption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'caption' => 'string',
        'points' => 'integer',
        'visibleflag' => 'boolean',
    ];
}
