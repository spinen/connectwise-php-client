<?php

namespace Spinen\ConnectWise\Models\Time;

use Spinen\ConnectWise\Support\Model;

class WorkRoleLocation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'hourlyRate' => 'double',
    ];
}
