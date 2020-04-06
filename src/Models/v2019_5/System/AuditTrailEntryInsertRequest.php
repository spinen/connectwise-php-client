<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AuditTrailEntryInsertRequest Version v2019_5
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
        'text' => 'string'
    ];
}
