<?php

namespace Spinen\ConnectWise\Models\v2019_5\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyOption Version v2019_5
 *
 * Model for SurveyOption
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'caption' => 'string',
        'id' => 'integer',
        'points' => 'integer',
        'visibleflag' => 'boolean'
    ];
}
