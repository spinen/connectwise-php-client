<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationTypeQuestionValue Version v2018_6
 * 
 * Model for ConfigurationTypeQuestionValue
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Company\ConfigurationTypeReference $configurationType
 * @property Spinen\ConnectWise\Models\v2018_6\Company\ConfigurationTypeQuestionReference $question
 * @property string $value
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
 */
class ConfigurationTypeQuestionValue extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'configurationType' => 'Spinen\ConnectWise\Models\v2018_6\Company\ConfigurationTypeReference',
        'question' => 'Spinen\ConnectWise\Models\v2018_6\Company\ConfigurationTypeQuestionReference',
        'value' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
    ];
}
