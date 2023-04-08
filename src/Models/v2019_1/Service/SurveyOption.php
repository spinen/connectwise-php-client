<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyOption Version v2019_1
 *
 * Model for SurveyOption
 *
 * @property Metadata $_info
 * @property bool $visibleflag
 * @property int $id
 * @property int $points
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
        'visibleflag' => 'boolean',
    ];
}
