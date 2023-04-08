<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaDisposition Version v2019_1
 *
 * Model for RmaDisposition
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property int $id
 * @property string $name
 */
class RmaDisposition extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
    ];
}
