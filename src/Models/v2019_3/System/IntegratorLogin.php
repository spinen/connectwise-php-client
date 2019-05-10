<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class IntegratorLogin Version v2019_3
 *
 * Model for IntegratorLogin
 *
 * @property Carbon\Carbon $dateInactivated
 * @property Spinen\ConnectWise\Models\v2019_3\System\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $inactivatedBy
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property boolean $CompanyLegacyCallbackFlag
 * @property boolean $activityApiFlag
 * @property boolean $activityLegacyCallbackFlag
 * @property boolean $agreementApiFlag
 * @property boolean $agreementCallbackLegacyFlag
 * @property boolean $canAccessAllApisFlag
 * @property boolean $canAccessAllRecordsFlag
 * @property boolean $companyApiFlag
 * @property boolean $configurationApiFlag
 * @property boolean $configurationAutoChildFlag
 * @property boolean $configurationChildlingFlag
 * @property boolean $configurationLegacyCallbackFlag
 * @property boolean $contactApiFlag
 * @property boolean $contactLegacyCallbackFlag
 * @property boolean $documentApiFlag
 * @property boolean $inactiveFlag
 * @property boolean $invoiceApiFlag
 * @property boolean $logMeInSupportApiFlag
 * @property boolean $managedServicesApiFlag
 * @property boolean $managedServicesAutoChildFlag
 * @property boolean $managedServicesChildingFlag
 * @property boolean $marketingApiFlag
 * @property boolean $memberApiFlag
 * @property boolean $ntrSupportApiFlag
 * @property boolean $opportunityApiFlag
 * @property boolean $opportunityConversionApiFlag
 * @property boolean $opportunityLegacyCallbackFlag
 * @property boolean $productApiFlag
 * @property boolean $productLegacyCallbackFlag
 * @property boolean $projectApiFlag
 * @property boolean $projectLegacyCallbackFlag
 * @property boolean $purchasingApiFlag
 * @property boolean $purchasingLegacyCallbackFlag
 * @property boolean $reportingApiFlag
 * @property boolean $scheduleApiFlag
 * @property boolean $scheduleLegacyCallbackFlag
 * @property boolean $serviceBoardLegacyCallbackFlag
 * @property boolean $serviceTicketApiFlag
 * @property boolean $systemApiFlag
 * @property boolean $timeEntryApiFlag
 * @property boolean $timeEntryLegacyCallbackFlag
 * @property integer $id
 * @property string $activityCallbackUrl
 * @property string $agreementCallbackUrl
 * @property string $companyCallbackUrl
 * @property string $configurationCallbackUrl
 * @property string $contactCallbackUrl
 * @property string $opportunityCallbackUrl
 * @property string $password
 * @property string $productCallbackUrl
 * @property string $projectCallbackUrl
 * @property string $purchasingCallbackUrl
 * @property string $scheduleCallbackUrl
 * @property string $serviceBoardCallbackUrl
 * @property string $timeEntryCallbackUrl
 * @property string $username
 */
class IntegratorLogin extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'CompanyLegacyCallbackFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'activityApiFlag' => 'boolean',
        'activityCallbackUrl' => 'string',
        'activityLegacyCallbackFlag' => 'boolean',
        'agreementApiFlag' => 'boolean',
        'agreementCallbackLegacyFlag' => 'boolean',
        'agreementCallbackUrl' => 'string',
        'board' => 'Spinen\ConnectWise\Models\v2019_3\System\BoardReference',
        'canAccessAllApisFlag' => 'boolean',
        'canAccessAllRecordsFlag' => 'boolean',
        'companyApiFlag' => 'boolean',
        'companyCallbackUrl' => 'string',
        'configurationApiFlag' => 'boolean',
        'configurationAutoChildFlag' => 'boolean',
        'configurationCallbackUrl' => 'string',
        'configurationChildlingFlag' => 'boolean',
        'configurationLegacyCallbackFlag' => 'boolean',
        'contactApiFlag' => 'boolean',
        'contactCallbackUrl' => 'string',
        'contactLegacyCallbackFlag' => 'boolean',
        'dateInactivated' => 'Carbon\Carbon',
        'documentApiFlag' => 'boolean',
        'id' => 'integer',
        'inactivatedBy' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'inactiveFlag' => 'boolean',
        'invoiceApiFlag' => 'boolean',
        'logMeInSupportApiFlag' => 'boolean',
        'managedServicesApiFlag' => 'boolean',
        'managedServicesAutoChildFlag' => 'boolean',
        'managedServicesChildingFlag' => 'boolean',
        'marketingApiFlag' => 'boolean',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'memberApiFlag' => 'boolean',
        'ntrSupportApiFlag' => 'boolean',
        'opportunityApiFlag' => 'boolean',
        'opportunityCallbackUrl' => 'string',
        'opportunityConversionApiFlag' => 'boolean',
        'opportunityLegacyCallbackFlag' => 'boolean',
        'password' => 'string',
        'productApiFlag' => 'boolean',
        'productCallbackUrl' => 'string',
        'productLegacyCallbackFlag' => 'boolean',
        'projectApiFlag' => 'boolean',
        'projectCallbackUrl' => 'string',
        'projectLegacyCallbackFlag' => 'boolean',
        'purchasingApiFlag' => 'boolean',
        'purchasingCallbackUrl' => 'string',
        'purchasingLegacyCallbackFlag' => 'boolean',
        'reportingApiFlag' => 'boolean',
        'scheduleApiFlag' => 'boolean',
        'scheduleCallbackUrl' => 'string',
        'scheduleLegacyCallbackFlag' => 'boolean',
        'serviceBoardCallbackUrl' => 'string',
        'serviceBoardLegacyCallbackFlag' => 'boolean',
        'serviceTicketApiFlag' => 'boolean',
        'systemApiFlag' => 'boolean',
        'timeEntryApiFlag' => 'boolean',
        'timeEntryCallbackUrl' => 'string',
        'timeEntryLegacyCallbackFlag' => 'boolean',
        'username' => 'string',
    ];
}
