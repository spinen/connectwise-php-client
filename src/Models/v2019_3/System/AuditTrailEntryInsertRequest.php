<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AuditTrailEntryInsertRequest Version v2019_3
 *
 * Model for AuditTrailEntryInsertRequest
 *
 * @property string $text
 * @property array $objects
 */
class AuditTrailEntryInsertRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'text' => 'string',
        'objects' => 'array',
    ];
}
