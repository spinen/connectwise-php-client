<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Country
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property string $cityCaption
 * @property string $stateCaption
 * @property string $zipCaption
 * @property integer $zipMinimumLength
 * @property string $dialingPrefix
 * @property string $countryCode
 * @property string $localizationCaptionOne
 * @property string $localizationValueOne
 */
class Country extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'cityCaption' => 'string',
        'stateCaption' => 'string',
        'zipCaption' => 'string',
        'zipMinimumLength' => 'integer',
        'dialingPrefix' => 'string',
        'countryCode' => 'string',
        'localizationCaptionOne' => 'string',
        'localizationValueOne' => 'string',
    ];
}
