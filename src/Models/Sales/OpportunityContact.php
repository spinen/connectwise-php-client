<?php

namespace Spinen\ConnectWise\Models\Sales;

use Spinen\ConnectWise\Support\Model;

class OpportunityContact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'notes' => 'string',
        'referralFlag' => 'boolean',
        'opportunityId' => 'integer',
        'phoneNumber' => 'string',
        'emailAddress' => 'string',
    ];
}
