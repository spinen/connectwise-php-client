<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SicCodeReference Version v2018_5
 *
 * Model for SicCodeReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class SicCodeReference extends Model
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
