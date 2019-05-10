<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationServiceSetup Version v2019_3
 *
 * Model for PortalConfigurationServiceSetup
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Company\ServiceSignoffReference $fixedFeeTicketTemplate
 * @property Spinen\ConnectWise\Models\v2019_3\Company\ServiceSignoffReference $timeMaterialsTicketTemplate
 * @property boolean $actualHoursFlag
 * @property boolean $approvalStatusFlag
 * @property boolean $assignedResourcesFlag
 * @property boolean $budgetHoursFlag
 * @property boolean $closedTasksFlag
 * @property boolean $contactFlag
 * @property boolean $enableChatAssistFlag
 * @property boolean $enteredDateFlag
 * @property boolean $lastUpdateFlag
 * @property boolean $openTasksFlag
 * @property boolean $requiredDateFlag
 * @property boolean $serviceBoardFlag
 * @property boolean $serviceSubTypeFlag
 * @property boolean $serviceSubTypeItemFlag
 * @property boolean $serviceTypeFlag
 * @property boolean $siteNameFlag
 * @property boolean $slaInfoFlag
 * @property boolean $statusFlag
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
        'actualHoursFlag' => 'boolean',
        'approvalStatusFlag' => 'boolean',
        'assignedResourcesFlag' => 'boolean',
        'budgetHoursFlag' => 'boolean',
        'closedTasksFlag' => 'boolean',
        'contactFlag' => 'boolean',
        'displayClosedTicketsOption' => 'string',
        'enableChatAssistFlag' => 'boolean',
        'enteredDateFlag' => 'boolean',
        'fixedFeeTicketTemplate' => 'Spinen\ConnectWise\Models\v2019_3\Company\ServiceSignoffReference',
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
        'timeMaterialsTicketTemplate' => 'Spinen\ConnectWise\Models\v2019_3\Company\ServiceSignoffReference',
    ];
}
