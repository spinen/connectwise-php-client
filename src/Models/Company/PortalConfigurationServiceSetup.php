<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class PortalConfigurationServiceSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'serviceTypeFlag' => 'boolean',
        'serviceSubTypeFlag' => 'boolean',
        'serviceSubTypeItemFlag' => 'boolean',
        'statusFlag' => 'boolean',
        'siteNameFlag' => 'boolean',
        'enteredDateFlag' => 'boolean',
        'lastUpdateFlag' => 'boolean',
        'requiredDateFlag' => 'boolean',
        'contactFlag' => 'boolean',
        'assignedResourcesFlag' => 'boolean',
        'slaInfoFlag' => 'boolean',
        'serviceBoardFlag' => 'boolean',
        'budgetHoursFlag' => 'boolean',
        'actualHoursFlag' => 'boolean',
        'approvalStatusFlag' => 'boolean',
        'openTasksFlag' => 'boolean',
        'closedTasksFlag' => 'boolean',
        'enableChatAssistFlag' => 'boolean',
        'displayClosedTicketsOption' => 'string',
    ];
}
