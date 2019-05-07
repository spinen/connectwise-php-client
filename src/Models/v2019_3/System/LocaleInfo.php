<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocaleInfo
 *
 * @property integer $id
 * @property string $name
 * @property string $localeCode
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
        'name' => 'string',
        'localeCode' => 'string',
    ];
}
