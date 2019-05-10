<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationTypeQuestionValue Version v2018_6
 *
 * Model for ConfigurationTypeQuestionValue
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Company\ConfigurationTypeQuestionReference $question
 * @property Spinen\ConnectWise\Models\v2018_6\Company\ConfigurationTypeReference $configurationType
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $value
 */
class ConfigurationTypeQuestionValue extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
        'configurationType' => 'Spinen\ConnectWise\Models\v2018_6\Company\ConfigurationTypeReference',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'question' => 'Spinen\ConnectWise\Models\v2018_6\Company\ConfigurationTypeQuestionReference',
        'value' => 'string',
    ];
}
