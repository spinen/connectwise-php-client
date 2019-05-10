<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityContact Version v2019_2
 *
 * Model for OpportunityContact
 *
 * @property CompanyReference $company
 * @property ContactReference $contact
 * @property Metadata $_info
 * @property OpportunitySalesRoleReference $role
 * @property boolean $referralFlag
 * @property integer $id
 * @property integer $opportunityId
 * @property string $emailAddress
 * @property string $notes
 * @property string $phoneNumber
 */
class OpportunityContact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'company' => CompanyReference::class,
        'contact' => ContactReference::class,
        'emailAddress' => 'string',
        'id' => 'integer',
        'notes' => 'string',
        'opportunityId' => 'integer',
        'phoneNumber' => 'string',
        'referralFlag' => 'boolean',
        'role' => OpportunitySalesRoleReference::class
    ];
}
