<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Severity Version v2019_3
 *
 * Model for Severity
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property int $id
 * @property string $description
 * @property string $name
 */
class Severity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'description' => 'string',
        'id' => 'integer',
        'name' => 'string',
    ];
}
