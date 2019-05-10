<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityContact Version v2018_4
 *
 * Model for OpportunityContact
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\OpportunitySalesRoleReference $role
 * @property string $notes
 * @property boolean $referralFlag
 * @property integer $opportunityId
 * @property string $phoneNumber
 * @property string $emailAddress
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\Metadata $_info
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
        'contact' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference',
        'role' => 'Spinen\ConnectWise\Models\v2018_4\Sales\OpportunitySalesRoleReference',
        'notes' => 'string',
        'referralFlag' => 'boolean',
        'opportunityId' => 'integer',
        'phoneNumber' => 'string',
        'emailAddress' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Sales\Metadata',
    ];
}
