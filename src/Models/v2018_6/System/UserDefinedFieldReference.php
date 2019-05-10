<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UserDefinedFieldReference Version v2018_6
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
        'name' => 'string',
    ];
}
