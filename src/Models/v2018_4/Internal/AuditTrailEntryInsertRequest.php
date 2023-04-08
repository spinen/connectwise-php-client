<?php

namespace Spinen\ConnectWise\Models\v2018_4\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AuditTrailEntryInsertRequest Version v2018_4
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
