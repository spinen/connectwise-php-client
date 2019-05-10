<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class IntegratorLogin Version v2018_4
 * 
 * Model for IntegratorLogin
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property boolean $canAccessAllRecordsFlag
 * @property boolean $canAccessAllApisFlag
 * @property boolean $inactiveFlag
 * @property Carbon\Carbon $dateInactivated
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $inactivatedBy
 * @property boolean $serviceTicketApiFlag
 * @property Spinen\ConnectWise\Models\v2018_4\System\BoardReference $board
 * @property string $serviceBoardCallbackUrl
 * @property boolean $serviceBoardLegacyCallbackFlag
 * @property boolean $timeEntryApiFlag
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $member
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
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
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
        'dateInactivated' => 'Carbon\Carbon',
        'inactivatedBy' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
        'serviceTicketApiFlag' => 'boolean',
        'board' => 'Spinen\ConnectWise\Models\v2018_4\System\BoardReference',
        'serviceBoardCallbackUrl' => 'string',
        'serviceBoardLegacyCallbackFlag' => 'boolean',
        'timeEntryApiFlag' => 'boolean',
        'member' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
    ];
}
