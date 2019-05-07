<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardStatusNotification
 *
 * @property integer $id
 * @property string $email
 * @property integer $workflowStep
 */
class BoardStatusNotification extends Model
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
