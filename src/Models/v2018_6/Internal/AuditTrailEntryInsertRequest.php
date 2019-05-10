<?php

namespace Spinen\ConnectWise\Models\v2018_6\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AuditTrailEntryInsertRequest Version v2018_6
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
