<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class UserDefinedFieldReference Version v2019_5
 *
 * If your trigger is for custom fields, this will populate with the custom field associated with the option
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class UserDefinedFieldReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
