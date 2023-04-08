<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AuditTrailEntryInsertRequest Version v2019_1
 *
 * Model for AuditTrailEntryInsertRequest
 *
 * @property array $objects
 * @property string $text
 */
class AuditTrailEntryInsertRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'objects' => 'array',
        'text' => 'string',
    ];
}
