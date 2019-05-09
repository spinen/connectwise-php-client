<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationServiceSetup Version v2018_4
 * 
 * Model for PortalConfigurationServiceSetup
 *
 * @property integer $id
 * @property boolean $serviceTypeFlag
 * @property boolean $serviceSubTypeFlag
 * @property boolean $serviceSubTypeItemFlag
 * @property boolean $statusFlag
 * @property boolean $siteNameFlag
 * @property boolean $enteredDateFlag
 * @property boolean $lastUpdateFlag
 * @property boolean $requiredDateFlag
 * @property boolean $contactFlag
 * @property boolean $assignedResourcesFlag
 * @property boolean $slaInfoFlag
 * @property boolean $serviceBoardFlag
 * @property boolean $budgetHoursFlag
 * @property boolean $actualHoursFlag
 * @property boolean $approvalStatusFlag
 * @property boolean $openTasksFlag
 * @property boolean $closedTasksFlag
 * @property boolean $enableChatAssistFlag
 * @property string $displayClosedTicketsOption
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ServiceSignoffReference $timeMaterialsTicketTemplate
 * @property Spinen\ConnectWise\Models\v2018_4\Company\ServiceSignoffReference $fixedFeeTicketTemplate
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 */
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
        'timeMaterialsTicketTemplate' => 'Spinen\ConnectWise\Models\v2018_4\Company\ServiceSignoffReference',
        'fixedFeeTicketTemplate' => 'Spinen\ConnectWise\Models\v2018_4\Company\ServiceSignoffReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
    ];
}
