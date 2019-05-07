<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityContact
 *
 * @property integer $id
 * @property string $notes
 * @property boolean $referralFlag
 * @property integer $opportunityId
 * @property string $phoneNumber
 * @property string $emailAddress
 */
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
