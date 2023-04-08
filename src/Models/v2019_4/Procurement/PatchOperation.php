<?php

namespace Spinen\ConnectWise\Models\v2019_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PatchOperation Version v2019_4
 *
 * Model for PatchOperation
 *
 * @property object $value
 * @property string $op
 * @property string $path
 */
class PatchOperation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'op' => 'string',
        'path' => 'string',
        'value' => 'object',
    ];
}
