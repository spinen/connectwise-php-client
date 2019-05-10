<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationOpportunitySetup Version v2019_2
 *
 * Model for PortalConfigurationOpportunitySetup
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Company\ActivityTypeReference $acceptanceEmailActivityType
 * @property Spinen\ConnectWise\Models\v2019_2\Company\ActivityTypeReference $rejectionEmailActivityType
 * @property Spinen\ConnectWise\Models\v2019_2\Company\MemberReference $acceptanceEmailAssignedByMember
 * @property Spinen\ConnectWise\Models\v2019_2\Company\MemberReference $rejectionEmailAssignedByMember
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Company\OpportunityStatusReference $acceptanceOpportunityStatus
 * @property Spinen\ConnectWise\Models\v2019_2\Company\OpportunityStatusReference $rejectionOpportunityStatus
 * @property array $opportunityStatusRecIDs
 * @property array $opportunityTypeRecIDs
 * @property boolean $acceptanceChangeStatusFlag
 * @property boolean $acceptanceCreateActivityFlag
 * @property boolean $acceptanceSendEmailFlag
 * @property boolean $addAllOpportunityStatuses
 * @property boolean $addAllOpportunityTypes
 * @property boolean $confirmationEmailUseDefaultCompanyEmailAddressFlag
 * @property boolean $confirmationSendEmailFlag
 * @property boolean $rejectionChangeStatusFlag
 * @property boolean $rejectionCreateActivityFlag
 * @property boolean $rejectionSendEmailFlag
 * @property boolean $removeAllOpportunityStatuses
 * @property boolean $removeAllOpportunityTypes
 * @property boolean $restrictViewByOpportunityStatusFlag
 * @property boolean $restrictViewByOpportunityTypeFlag
 * @property integer $id
 * @property string $acceptanceEmailBody
 * @property string $acceptanceEmailFromFirstName
 * @property string $acceptanceEmailFromLastName
 * @property string $acceptanceEmailSubject
 * @property string $acceptanceFromEmail
 * @property string $confirmationEmailBody
 * @property string $confirmationEmailFromFirstName
 * @property string $confirmationEmailFromLastName
 * @property string $confirmationEmailSubject
 * @property string $confirmationFromEmail
 * @property string $rejectionEmailBody
 * @property string $rejectionEmailFromFirstName
 * @property string $rejectionEmailFromLastName
 * @property string $rejectionEmailSubject
 * @property string $rejectionFromEmail
 */
class PortalConfigurationOpportunitySetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
        'acceptanceChangeStatusFlag' => 'boolean',
        'acceptanceCreateActivityFlag' => 'boolean',
        'acceptanceEmailActivityType' => 'Spinen\ConnectWise\Models\v2019_2\Company\ActivityTypeReference',
        'acceptanceEmailAssignedByMember' => 'Spinen\ConnectWise\Models\v2019_2\Company\MemberReference',
        'acceptanceEmailBody' => 'string',
        'acceptanceEmailFromFirstName' => 'string',
        'acceptanceEmailFromLastName' => 'string',
        'acceptanceEmailSubject' => 'string',
        'acceptanceFromEmail' => 'string',
        'acceptanceOpportunityStatus' => 'Spinen\ConnectWise\Models\v2019_2\Company\OpportunityStatusReference',
        'acceptanceSendEmailFlag' => 'boolean',
        'addAllOpportunityStatuses' => 'boolean',
        'addAllOpportunityTypes' => 'boolean',
        'confirmationEmailBody' => 'string',
        'confirmationEmailFromFirstName' => 'string',
        'confirmationEmailFromLastName' => 'string',
        'confirmationEmailSubject' => 'string',
        'confirmationEmailUseDefaultCompanyEmailAddressFlag' => 'boolean',
        'confirmationFromEmail' => 'string',
        'confirmationSendEmailFlag' => 'boolean',
        'id' => 'integer',
        'opportunityStatusRecIDs' => 'array',
        'opportunityTypeRecIDs' => 'array',
        'rejectionChangeStatusFlag' => 'boolean',
        'rejectionCreateActivityFlag' => 'boolean',
        'rejectionEmailActivityType' => 'Spinen\ConnectWise\Models\v2019_2\Company\ActivityTypeReference',
        'rejectionEmailAssignedByMember' => 'Spinen\ConnectWise\Models\v2019_2\Company\MemberReference',
        'rejectionEmailBody' => 'string',
        'rejectionEmailFromFirstName' => 'string',
        'rejectionEmailFromLastName' => 'string',
        'rejectionEmailSubject' => 'string',
        'rejectionFromEmail' => 'string',
        'rejectionOpportunityStatus' => 'Spinen\ConnectWise\Models\v2019_2\Company\OpportunityStatusReference',
        'rejectionSendEmailFlag' => 'boolean',
        'removeAllOpportunityStatuses' => 'boolean',
        'removeAllOpportunityTypes' => 'boolean',
        'restrictViewByOpportunityStatusFlag' => 'boolean',
        'restrictViewByOpportunityTypeFlag' => 'boolean',
    ];
}
