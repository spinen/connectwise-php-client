<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Country Version v2019_1
 *
 * Model for Country
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Company\AddressFormatReference $addressFormat
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property integer $zipMinimumLength
 * @property string $cityCaption
 * @property string $countryCode
 * @property string $dialingPrefix
 * @property string $localizationCaptionOne
 * @property string $localizationValueOne
 * @property string $name
 * @property string $stateCaption
 * @property string $zipCaption
 */
class Country extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
        'addressFormat' => 'Spinen\ConnectWise\Models\v2019_1\Company\AddressFormatReference',
        'cityCaption' => 'string',
        'countryCode' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Company\CurrencyReference',
        'defaultFlag' => 'boolean',
        'dialingPrefix' => 'string',
        'id' => 'integer',
        'localizationCaptionOne' => 'string',
        'localizationValueOne' => 'string',
        'name' => 'string',
        'stateCaption' => 'string',
        'zipCaption' => 'string',
        'zipMinimumLength' => 'integer',
    ];
}
