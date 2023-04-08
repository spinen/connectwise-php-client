<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class IntegratorLogin Version v2019_3
 *
 * Model for IntegratorLogin
 *
 * @property BoardReference $board
 * @property Carbon $dateInactivated
 * @property MemberReference $inactivatedBy
 * @property MemberReference $member
 * @property Metadata $_info
 * @property bool $CompanyLegacyCallbackFlag
 * @property bool $activityApiFlag
 * @property bool $activityLegacyCallbackFlag
 * @property bool $agreementApiFlag
 * @property bool $agreementCallbackLegacyFlag
 * @property bool $canAccessAllApisFlag
 * @property bool $canAccessAllRecordsFlag
 * @property bool $companyApiFlag
 * @property bool $configurationApiFlag
 * @property bool $configurationAutoChildFlag
 * @property bool $configurationChildlingFlag
 * @property bool $configurationLegacyCallbackFlag
 * @property bool $contactApiFlag
 * @property bool $contactLegacyCallbackFlag
 * @property bool $documentApiFlag
 * @property bool $inactiveFlag
 * @property bool $invoiceApiFlag
 * @property bool $logMeInSupportApiFlag
 * @property bool $managedServicesApiFlag
 * @property bool $managedServicesAutoChildFlag
 * @property bool $managedServicesChildingFlag
 * @property bool $marketingApiFlag
 * @property bool $memberApiFlag
 * @property bool $ntrSupportApiFlag
 * @property bool $opportunityApiFlag
 * @property bool $opportunityConversionApiFlag
 * @property bool $opportunityLegacyCallbackFlag
 * @property bool $productApiFlag
 * @property bool $productLegacyCallbackFlag
 * @property bool $projectApiFlag
 * @property bool $projectLegacyCallbackFlag
 * @property bool $purchasingApiFlag
 * @property bool $purchasingLegacyCallbackFlag
 * @property bool $reportingApiFlag
 * @property bool $scheduleApiFlag
 * @property bool $scheduleLegacyCallbackFlag
 * @property bool $serviceBoardLegacyCallbackFlag
 * @property bool $serviceTicketApiFlag
 * @property bool $systemApiFlag
 * @property bool $timeEntryApiFlag
 * @property bool $timeEntryLegacyCallbackFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'activityApiFlag' => 'boolean',
        'activityCallbackUrl' => 'string',
        'activityLegacyCallbackFlag' => 'boolean',
        'agreementApiFlag' => 'boolean',
        'agreementCallbackLegacyFlag' => 'boolean',
        'agreementCallbackUrl' => 'string',
        'board' => BoardReference::class,
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
        'dateInactivated' => Carbon::class,
        'documentApiFlag' => 'boolean',
        'id' => 'integer',
        'inactivatedBy' => MemberReference::class,
        'inactiveFlag' => 'boolean',
        'invoiceApiFlag' => 'boolean',
        'logMeInSupportApiFlag' => 'boolean',
        'managedServicesApiFlag' => 'boolean',
        'managedServicesAutoChildFlag' => 'boolean',
        'managedServicesChildingFlag' => 'boolean',
        'marketingApiFlag' => 'boolean',
        'member' => MemberReference::class,
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
