<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationOpportunitySetup
 *
 * @property integer $id
 * @property array $opportunityStatusRecIDs
 * @property boolean $addAllOpportunityStatuses
 * @property boolean $removeAllOpportunityStatuses
 * @property array $opportunityTypeRecIDs
 * @property boolean $addAllOpportunityTypes
 * @property boolean $removeAllOpportunityTypes
 * @property boolean $restrictViewByOpportunityStatusFlag
 * @property boolean $restrictViewByOpportunityTypeFlag
 * @property boolean $acceptanceChangeStatusFlag
 * @property boolean $acceptanceCreateActivityFlag
 * @property boolean $acceptanceSendEmailFlag
 * @property string $acceptanceEmailFromFirstName
 * @property string $acceptanceEmailFromLastName
 * @property string $acceptanceEmailSubject
 * @property string $acceptanceEmailBody
 * @property string $acceptanceFromEmail
 * @property boolean $rejectionChangeStatusFlag
 * @property boolean $rejectionCreateActivityFlag
 * @property boolean $rejectionSendEmailFlag
 * @property string $rejectionEmailFromFirstName
 * @property string $rejectionEmailFromLastName
 * @property string $rejectionFromEmail
 * @property string $rejectionEmailSubject
 * @property string $rejectionEmailBody
 * @property boolean $confirmationSendEmailFlag
 * @property boolean $confirmationEmailUseDefaultCompanyEmailAddressFlag
 * @property string $confirmationEmailFromFirstName
 * @property string $confirmationEmailFromLastName
 * @property string $confirmationFromEmail
 * @property string $confirmationEmailSubject
 * @property string $confirmationEmailBody
 */
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
