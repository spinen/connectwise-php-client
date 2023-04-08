<?php

namespace Spinen\ConnectWise\Models\v2018_6\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AuditTrailObjects Version v2018_6
 *
 * A list of AuditTrailObject to which the text will be applied. List Cannot Be Empty.
 *
 * @property array $ids
 * @property string $type
 */
class AuditTrailObjects extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'ids' => 'array',
        'type' => 'string',
    ];
}
