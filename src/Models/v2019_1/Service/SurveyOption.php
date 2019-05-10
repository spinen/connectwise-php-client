<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyOption Version v2019_1
 *
 * Model for SurveyOption
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 * @property boolean $visibleflag
 * @property integer $id
 * @property integer $points
 * @property string $caption
 */
class SurveyOption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
        'caption' => 'string',
        'id' => 'integer',
        'points' => 'integer',
        'visibleflag' => 'boolean',
    ];
}
