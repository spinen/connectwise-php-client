<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyQuestion Version v2019_2
 *
 * Model for SurveyQuestion
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\System\SurveyReference $survey
 * @property string $fieldType
 * @property string $entryType
 * @property float $sequenceNumber
 * @property string $question
 * @property integer $numberOfDecimals
 * @property boolean $requiredFlag
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class SurveyQuestion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'survey' => 'Spinen\ConnectWise\Models\v2019_2\System\SurveyReference',
        'fieldType' => 'string',
        'entryType' => 'string',
        'sequenceNumber' => 'float',
        'question' => 'string',
        'numberOfDecimals' => 'integer',
        'requiredFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
