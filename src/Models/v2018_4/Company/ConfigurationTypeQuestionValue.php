<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationTypeQuestionValue
 *
 * @property integer $id
 * @property string $value
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
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
        'value' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
    ];
}
