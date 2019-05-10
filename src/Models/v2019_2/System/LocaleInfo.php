<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class LocaleInfo Version v2019_2
 *
 * Model for LocaleInfo
 *
 * @property integer $id
 * @property string $localeCode
 * @property string $name
 */
class LocaleInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'localeCode' => 'string',
        'name' => 'string'
    ];
}
