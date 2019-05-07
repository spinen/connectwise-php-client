<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatusNotification
 *
 * @property integer $id
 * @property string $email
 * @property integer $workflowStep
 */
class RmaStatusNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email' => 'string',
        'workflowStep' => 'integer',
    ];
}
