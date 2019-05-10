<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class LocaleInfo Version v2018_5
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
