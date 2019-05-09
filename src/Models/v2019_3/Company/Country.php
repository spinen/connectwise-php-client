<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Country Version v2019_3
 * 
 * Model for Country
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Company\CurrencyReference $currency
 * @property string $cityCaption
 * @property string $stateCaption
 * @property string $zipCaption
 * @property integer $zipMinimumLength
 * @property string $dialingPrefix
 * @property Spinen\ConnectWise\Models\v2019_3\Company\AddressFormatReference $addressFormat
 * @property string $countryCode
 * @property string $localizationCaptionOne
 * @property string $localizationValueOne
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
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
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Company\CurrencyReference',
        'cityCaption' => 'string',
        'stateCaption' => 'string',
        'zipCaption' => 'string',
        'zipMinimumLength' => 'integer',
        'dialingPrefix' => 'string',
        'addressFormat' => 'Spinen\ConnectWise\Models\v2019_3\Company\AddressFormatReference',
        'countryCode' => 'string',
        'localizationCaptionOne' => 'string',
        'localizationValueOne' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
    ];
}
