<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class PortalConfigurationOpportunitySetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'opportunityStatusRecIDs' => 'array',
        'addAllOpportunityStatuses' => 'boolean',
        'removeAllOpportunityStatuses' => 'boolean',
        'opportunityTypeRecIDs' => 'array',
        'addAllOpportunityTypes' => 'boolean',
        'removeAllOpportunityTypes' => 'boolean',
        'restrictViewByOpportunityStatusFlag' => 'boolean',
        'restrictViewByOpportunityTypeFlag' => 'boolean',
        'acceptanceChangeStatusFlag' => 'boolean',
        'acceptanceCreateActivityFlag' => 'boolean',
        'acceptanceSendEmailFlag' => 'boolean',
        'acceptanceEmailFromFirstName' => 'string',
        'acceptanceEmailFromLastName' => 'string',
        'acceptanceEmailSubject' => 'string',
        'acceptanceEmailBody' => 'string',
        'acceptanceFromEmail' => 'string',
        'rejectionChangeStatusFlag' => 'boolean',
        'rejectionCreateActivityFlag' => 'boolean',
        'rejectionSendEmailFlag' => 'boolean',
        'rejectionEmailFromFirstName' => 'string',
        'rejectionEmailFromLastName' => 'string',
        'rejectionFromEmail' => 'string',
        'rejectionEmailSubject' => 'string',
        'rejectionEmailBody' => 'string',
        'confirmationSendEmailFlag' => 'boolean',
        'confirmationEmailUseDefaultCompanyEmailAddressFlag' => 'boolean',
        'confirmationEmailFromFirstName' => 'string',
        'confirmationEmailFromLastName' => 'string',
        'confirmationFromEmail' => 'string',
        'confirmationEmailSubject' => 'string',
        'confirmationEmailBody' => 'string',
    ];
}
