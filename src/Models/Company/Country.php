<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

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
