<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationServiceSetup Version v2018_4
 *
 * Model for PortalConfigurationServiceSetup
 *
 * @property Metadata $_info
 * @property ServiceSignoffReference $fixedFeeTicketTemplate
 * @property ServiceSignoffReference $timeMaterialsTicketTemplate
 * @property bool $actualHoursFlag
 * @property bool $approvalStatusFlag
 * @property bool $assignedResourcesFlag
 * @property bool $budgetHoursFlag
 * @property bool $closedTasksFlag
 * @property bool $contactFlag
 * @property bool $enableChatAssistFlag
 * @property bool $enteredDateFlag
 * @property bool $lastUpdateFlag
 * @property bool $openTasksFlag
 * @property bool $requiredDateFlag
 * @property bool $serviceBoardFlag
 * @property bool $serviceSubTypeFlag
 * @property bool $serviceSubTypeItemFlag
 * @property bool $serviceTypeFlag
 * @property bool $siteNameFlag
 * @property bool $slaInfoFlag
 * @property bool $statusFlag
 * @property int $id
 * @property string $displayClosedTicketsOption
 */
class PortalConfigurationServiceSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'actualHoursFlag' => 'boolean',
        'approvalStatusFlag' => 'boolean',
        'assignedResourcesFlag' => 'boolean',
        'budgetHoursFlag' => 'boolean',
        'closedTasksFlag' => 'boolean',
        'contactFlag' => 'boolean',
        'displayClosedTicketsOption' => 'string',
        'enableChatAssistFlag' => 'boolean',
        'enteredDateFlag' => 'boolean',
        'fixedFeeTicketTemplate' => ServiceSignoffReference::class,
        'id' => 'integer',
        'lastUpdateFlag' => 'boolean',
        'openTasksFlag' => 'boolean',
        'requiredDateFlag' => 'boolean',
        'serviceBoardFlag' => 'boolean',
        'serviceSubTypeFlag' => 'boolean',
        'serviceSubTypeItemFlag' => 'boolean',
        'serviceTypeFlag' => 'boolean',
        'siteNameFlag' => 'boolean',
        'slaInfoFlag' => 'boolean',
        'statusFlag' => 'boolean',
        'timeMaterialsTicketTemplate' => ServiceSignoffReference::class,
    ];
}
