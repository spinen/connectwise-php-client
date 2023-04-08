<?php

namespace Spinen\ConnectWise\Models\v2019_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BulkResult Version v2019_4
 *
 * Model for BulkResult
 *
 * @property Metadata $_info
 * @property array $payload
 */
class BulkResult extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'payload' => 'array',
    ];
}
