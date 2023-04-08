<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SuccessResponse Version v2019_2
 *
 * Model for SuccessResponse
 *
 * @property bool $success
 * @property string $message
 */
class SuccessResponse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'message' => 'string',
        'success' => 'boolean',
    ];
}
