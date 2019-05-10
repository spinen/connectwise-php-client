<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AuditTrailObjects Version v2019_3
 *
 * A list of AuditTrailObject to which the text will be applied. List Cannot Be Empty.
 *
 * @property string $type
 * @property array $ids
 */
class AuditTrailObjects extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'type' => 'string',
        'ids' => 'array',
    ];
}
