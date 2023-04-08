<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SicCodeReference Version v2019_3
 *
 * Model for SicCodeReference
 *
 * @property Metadata $_info
 * @property int $id
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
