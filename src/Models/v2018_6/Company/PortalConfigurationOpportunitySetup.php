<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationOpportunitySetup Version v2018_6
 *
 * Model for PortalConfigurationOpportunitySetup
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
 * @property Spinen\ConnectWise\Models\v2018_6\Company\OpportunityStatusReference $acceptanceOpportunityStatus
 * @property boolean $acceptanceSendEmailFlag
 * @property string $acceptanceEmailFromFirstName
 * @property string $acceptanceEmailFromLastName
 * @property string $acceptanceEmailSubject
 * @property string $acceptanceEmailBody
 * @property string $acceptanceFromEmail
 * @property Spinen\ConnectWise\Models\v2018_6\Company\ActivityTypeReference $acceptanceEmailActivityType
 * @property Spinen\ConnectWise\Models\v2018_6\Company\MemberReference $acceptanceEmailAssignedByMember
 * @property boolean $rejectionChangeStatusFlag
 * @property boolean $rejectionCreateActivityFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Company\OpportunityStatusReference $rejectionOpportunityStatus
 * @property boolean $rejectionSendEmailFlag
 * @property string $rejectionEmailFromFirstName
 * @property string $rejectionEmailFromLastName
 * @property string $rejectionFromEmail
 * @property string $rejectionEmailSubject
 * @property string $rejectionEmailBody
 * @property Spinen\ConnectWise\Models\v2018_6\Company\ActivityTypeReference $rejectionEmailActivityType
 * @property Spinen\ConnectWise\Models\v2018_6\Company\MemberReference $rejectionEmailAssignedByMember
 * @property boolean $confirmationSendEmailFlag
 * @property boolean $confirmationEmailUseDefaultCompanyEmailAddressFlag
 * @property string $confirmationEmailFromFirstName
 * @property string $confirmationEmailFromLastName
 * @property string $confirmationFromEmail
 * @property string $confirmationEmailSubject
 * @property string $confirmationEmailBody
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
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
        'acceptanceOpportunityStatus' => 'Spinen\ConnectWise\Models\v2018_6\Company\OpportunityStatusReference',
        'acceptanceSendEmailFlag' => 'boolean',
        'acceptanceEmailFromFirstName' => 'string',
        'acceptanceEmailFromLastName' => 'string',
        'acceptanceEmailSubject' => 'string',
        'acceptanceEmailBody' => 'string',
        'acceptanceFromEmail' => 'string',
        'acceptanceEmailActivityType' => 'Spinen\ConnectWise\Models\v2018_6\Company\ActivityTypeReference',
        'acceptanceEmailAssignedByMember' => 'Spinen\ConnectWise\Models\v2018_6\Company\MemberReference',
        'rejectionChangeStatusFlag' => 'boolean',
        'rejectionCreateActivityFlag' => 'boolean',
        'rejectionOpportunityStatus' => 'Spinen\ConnectWise\Models\v2018_6\Company\OpportunityStatusReference',
        'rejectionSendEmailFlag' => 'boolean',
        'rejectionEmailFromFirstName' => 'string',
        'rejectionEmailFromLastName' => 'string',
        'rejectionFromEmail' => 'string',
        'rejectionEmailSubject' => 'string',
        'rejectionEmailBody' => 'string',
        'rejectionEmailActivityType' => 'Spinen\ConnectWise\Models\v2018_6\Company\ActivityTypeReference',
        'rejectionEmailAssignedByMember' => 'Spinen\ConnectWise\Models\v2018_6\Company\MemberReference',
        'confirmationSendEmailFlag' => 'boolean',
        'confirmationEmailUseDefaultCompanyEmailAddressFlag' => 'boolean',
        'confirmationEmailFromFirstName' => 'string',
        'confirmationEmailFromLastName' => 'string',
        'confirmationFromEmail' => 'string',
        'confirmationEmailSubject' => 'string',
        'confirmationEmailBody' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
    ];
}
