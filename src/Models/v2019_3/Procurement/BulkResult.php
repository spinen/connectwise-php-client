<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BulkResult Version v2019_3
 * 
 * Model for BulkResult
 *
 * @property array $payload
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
 */
class BulkResult extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'payload' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
    ];
}
