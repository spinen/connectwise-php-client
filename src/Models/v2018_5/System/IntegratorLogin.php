<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class IntegratorLogin
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property boolean $canAccessAllRecordsFlag
 * @property boolean $canAccessAllApisFlag
 * @property boolean $inactiveFlag
 * @property carbon $dateInactivated
 * @property boolean $serviceTicketApiFlag
 * @property string $serviceBoardCallbackUrl
 * @property boolean $serviceBoardLegacyCallbackFlag
 * @property boolean $timeEntryApiFlag
 * @property string $timeEntryCallbackUrl
 * @property boolean $timeEntryLegacyCallbackFlag
 * @property boolean $managedServicesApiFlag
 * @property boolean $managedServicesAutoChildFlag
 * @property boolean $managedServicesChildingFlag
 * @property boolean $contactApiFlag
 * @property string $contactCallbackUrl
 * @property boolean $contactLegacyCallbackFlag
 * @property boolean $companyApiFlag
 * @property string $companyCallbackUrl
 * @property boolean $CompanyLegacyCallbackFlag
 * @property boolean $activityApiFlag
 * @property string $activityCallbackUrl
 * @property boolean $activityLegacyCallbackFlag
 * @property boolean $ntrSupportApiFlag
 * @property boolean $logMeInSupportApiFlag
 * @property boolean $invoiceApiFlag
 * @property boolean $productApiFlag
 * @property string $productCallbackUrl
 * @property boolean $productLegacyCallbackFlag
 * @property boolean $opportunityApiFlag
 * @property string $opportunityCallbackUrl
 * @property boolean $opportunityLegacyCallbackFlag
 * @property boolean $opportunityConversionApiFlag
 * @property boolean $memberApiFlag
 * @property boolean $marketingApiFlag
 * @property boolean $purchasingApiFlag
 * @property string $purchasingCallbackUrl
 * @property boolean $purchasingLegacyCallbackFlag
 * @property boolean $reportingApiFlag
 * @property boolean $systemApiFlag
 * @property boolean $projectApiFlag
 * @property string $projectCallbackUrl
 * @property boolean $projectLegacyCallbackFlag
 * @property boolean $configurationApiFlag
 * @property boolean $configurationAutoChildFlag
 * @property boolean $configurationChildlingFlag
 * @property string $configurationCallbackUrl
 * @property boolean $configurationLegacyCallbackFlag
 * @property boolean $scheduleApiFlag
 * @property string $scheduleCallbackUrl
 * @property boolean $scheduleLegacyCallbackFlag
 * @property boolean $agreementApiFlag
 * @property string $agreementCallbackUrl
 * @property boolean $agreementCallbackLegacyFlag
 * @property boolean $documentApiFlag
 */
class IntegratorLogin extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'username' => 'string',
        'password' => 'string',
        'canAccessAllRecordsFlag' => 'boolean',
        'canAccessAllApisFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'dateInactivated' => 'carbon',
        'serviceTicketApiFlag' => 'boolean',
        'serviceBoardCallbackUrl' => 'string',
        'serviceBoardLegacyCallbackFlag' => 'boolean',
        'timeEntryApiFlag' => 'boolean',
        'timeEntryCallbackUrl' => 'string',
        'timeEntryLegacyCallbackFlag' => 'boolean',
        'managedServicesApiFlag' => 'boolean',
        'managedServicesAutoChildFlag' => 'boolean',
        'managedServicesChildingFlag' => 'boolean',
        'contactApiFlag' => 'boolean',
        'contactCallbackUrl' => 'string',
        'contactLegacyCallbackFlag' => 'boolean',
        'companyApiFlag' => 'boolean',
        'companyCallbackUrl' => 'string',
        'CompanyLegacyCallbackFlag' => 'boolean',
        'activityApiFlag' => 'boolean',
        'activityCallbackUrl' => 'string',
        'activityLegacyCallbackFlag' => 'boolean',
        'ntrSupportApiFlag' => 'boolean',
        'logMeInSupportApiFlag' => 'boolean',
        'invoiceApiFlag' => 'boolean',
        'productApiFlag' => 'boolean',
        'productCallbackUrl' => 'string',
        'productLegacyCallbackFlag' => 'boolean',
        'opportunityApiFlag' => 'boolean',
        'opportunityCallbackUrl' => 'string',
        'opportunityLegacyCallbackFlag' => 'boolean',
        'opportunityConversionApiFlag' => 'boolean',
        'memberApiFlag' => 'boolean',
        'marketingApiFlag' => 'boolean',
        'purchasingApiFlag' => 'boolean',
        'purchasingCallbackUrl' => 'string',
        'purchasingLegacyCallbackFlag' => 'boolean',
        'reportingApiFlag' => 'boolean',
        'systemApiFlag' => 'boolean',
        'projectApiFlag' => 'boolean',
        'projectCallbackUrl' => 'string',
        'projectLegacyCallbackFlag' => 'boolean',
        'configurationApiFlag' => 'boolean',
        'configurationAutoChildFlag' => 'boolean',
        'configurationChildlingFlag' => 'boolean',
        'configurationCallbackUrl' => 'string',
        'configurationLegacyCallbackFlag' => 'boolean',
        'scheduleApiFlag' => 'boolean',
        'scheduleCallbackUrl' => 'string',
        'scheduleLegacyCallbackFlag' => 'boolean',
        'agreementApiFlag' => 'boolean',
        'agreementCallbackUrl' => 'string',
        'agreementCallbackLegacyFlag' => 'boolean',
        'documentApiFlag' => 'boolean',
    ];
}
