<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyQuestionValue
 *
 * @property integer $id
 * @property string $value
 * @property boolean $defaultFlag
 * @property integer $pointValue
 * @property boolean $inactiveFlag
 */
class SurveyQuestionValue extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'value' => 'string',
        'defaultFlag' => 'boolean',
        'pointValue' => 'integer',
        'inactiveFlag' => 'boolean',
    ];
}
