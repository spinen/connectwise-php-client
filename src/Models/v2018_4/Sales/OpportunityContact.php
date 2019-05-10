<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityContact Version v2018_4
 *
 * Model for OpportunityContact
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\OpportunitySalesRoleReference $role
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Sales\Metadata',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference',
        'emailAddress' => 'string',
        'id' => 'integer',
        'notes' => 'string',
        'opportunityId' => 'integer',
        'phoneNumber' => 'string',
        'referralFlag' => 'boolean',
        'role' => 'Spinen\ConnectWise\Models\v2018_4\Sales\OpportunitySalesRoleReference',
    ];
}
