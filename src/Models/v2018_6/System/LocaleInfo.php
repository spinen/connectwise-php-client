<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocaleInfo Version v2018_6
 *
 * Model for LocaleInfo
 *
 * @property int $id
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
        'name' => 'string',
    ];
}
