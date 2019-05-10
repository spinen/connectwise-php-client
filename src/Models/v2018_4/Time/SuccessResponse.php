<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SuccessResponse Version v2018_4
 *
 * Model for SuccessResponse
 *
 * @property boolean $success
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
        'success' => 'boolean',
        'message' => 'string',
    ];
}
