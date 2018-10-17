<?php

namespace Spinen\ConnectWise\Models\Sales;

use Spinen\ConnectWise\Support\Model;

class SalesTeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'allowAccessFlag' => 'boolean',
    ];
}
