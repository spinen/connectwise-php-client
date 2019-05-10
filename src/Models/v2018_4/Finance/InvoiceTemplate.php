<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceTemplate Version v2018_4
 *
 * Model for InvoiceTemplate
 *
 * @property integer $id
 * @property string $name
 * @property float $marginLeft
 * @property float $marginRight
 * @property float $marginTop
 * @property float $marginBottom
 * @property boolean $logoVisibleFlag
 * @property string $headerLogoPosition
 * @property boolean $remitToVisibleFlag
 * @property string $headerAddressPosition
 * @property boolean $headerTitleVisibleFlag
 * @property string $headerTitleCaption
 * @property string $headerTitlePosition
 * @property string $headerTitleFont
 * @property boolean $headerTermsVisibleFlag
 * @property string $headerTermsCaption
 * @property boolean $headerDueDateVisibleFlag
 * @property string $headerDueDateCaption
 * @property boolean $headerPoNumberVisibleFlag
 * @property string $headerPoNumberCaption
 * @property boolean $headerReferenceVisibleFlag
 * @property string $headerReferenceCaption
 * @property boolean $headerAccountVisibleFlag
 * @property string $headerAccountCaption
 * @property boolean $headerTaxIdVisibleFlag
 * @property string $headerTaxIdCaption
 * @property boolean $headerShipToVisibleFlag
 * @property string $headerShipToCaption
 * @property boolean $serviceHeaderTicketNumberVisibleFlag
 * @property string $serviceHeaderTicketNumberCaption
 * @property boolean $serviceHeaderCompanyNameVisibleFlag
 * @property string $serviceHeaderCompanyNameCaption
 * @property boolean $serviceHeaderSummaryVisibleFlag
 * @property string $serviceHeaderSummaryCaption
 * @property boolean $serviceHeaderContactNameVisibleFlag
 * @property string $serviceHeaderContactNameCaption
 * @property boolean $serviceHeaderDetailDescriptionVisibleFlag
 * @property string $serviceHeaderDetailDescriptionCaption
 * @property boolean $serviceHeaderResolutionVisibleFlag
 * @property string $serviceHeaderResolutionCaption
 * @property boolean $serviceHeaderAmountVisibleFlag
 * @property string $serviceHeaderAmountCaption
 * @property boolean $serviceHeaderBillingMethodVisibleFlag
 * @property string $serviceHeaderBillingMethodCaption
 * @property boolean $serviceHeaderClosedTasksVisibleFlag
 * @property boolean $serviceHeaderOpenTasksVisibleFlag
 * @property boolean $serviceHeaderBundledTicketsVisibleFlag
 * @property boolean $projectHeaderProjectNameVisibleFlag
 * @property string $projectHeaderProjectNameCaption
 * @property boolean $projectHeaderCompanyNameVisibleFlag
 * @property string $projectHeaderCompanyNameCaption
 * @property boolean $projectHeaderOriginalDownpaymentVisibleFlag
 * @property string $projectHeaderOriginalDownpaymentCaption
 * @property boolean $projectHeaderContactNameVisibleFlag
 * @property string $projectHeaderContactNameCaption
 * @property boolean $projectHeaderAmountVisibleFlag
 * @property string $projectHeaderAmountCaption
 * @property boolean $projectHeaderBillingMethodVisibleFlag
 * @property string $projectHeaderBillingMethodCaption
 * @property boolean $projectHeaderBillingTypeVisibleFlag
 * @property string $projectHeaderBillingTypeCaption
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 */
class InvoiceTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'marginLeft' => 'float',
        'marginRight' => 'float',
        'marginTop' => 'float',
        'marginBottom' => 'float',
        'logoVisibleFlag' => 'boolean',
        'headerLogoPosition' => 'string',
        'remitToVisibleFlag' => 'boolean',
        'headerAddressPosition' => 'string',
        'headerTitleVisibleFlag' => 'boolean',
        'headerTitleCaption' => 'string',
        'headerTitlePosition' => 'string',
        'headerTitleFont' => 'string',
        'headerTermsVisibleFlag' => 'boolean',
        'headerTermsCaption' => 'string',
        'headerDueDateVisibleFlag' => 'boolean',
        'headerDueDateCaption' => 'string',
        'headerPoNumberVisibleFlag' => 'boolean',
        'headerPoNumberCaption' => 'string',
        'headerReferenceVisibleFlag' => 'boolean',
        'headerReferenceCaption' => 'string',
        'headerAccountVisibleFlag' => 'boolean',
        'headerAccountCaption' => 'string',
        'headerTaxIdVisibleFlag' => 'boolean',
        'headerTaxIdCaption' => 'string',
        'headerShipToVisibleFlag' => 'boolean',
        'headerShipToCaption' => 'string',
        'serviceHeaderTicketNumberVisibleFlag' => 'boolean',
        'serviceHeaderTicketNumberCaption' => 'string',
        'serviceHeaderCompanyNameVisibleFlag' => 'boolean',
        'serviceHeaderCompanyNameCaption' => 'string',
        'serviceHeaderSummaryVisibleFlag' => 'boolean',
        'serviceHeaderSummaryCaption' => 'string',
        'serviceHeaderContactNameVisibleFlag' => 'boolean',
        'serviceHeaderContactNameCaption' => 'string',
        'serviceHeaderDetailDescriptionVisibleFlag' => 'boolean',
        'serviceHeaderDetailDescriptionCaption' => 'string',
        'serviceHeaderResolutionVisibleFlag' => 'boolean',
        'serviceHeaderResolutionCaption' => 'string',
        'serviceHeaderAmountVisibleFlag' => 'boolean',
        'serviceHeaderAmountCaption' => 'string',
        'serviceHeaderBillingMethodVisibleFlag' => 'boolean',
        'serviceHeaderBillingMethodCaption' => 'string',
        'serviceHeaderClosedTasksVisibleFlag' => 'boolean',
        'serviceHeaderOpenTasksVisibleFlag' => 'boolean',
        'serviceHeaderBundledTicketsVisibleFlag' => 'boolean',
        'projectHeaderProjectNameVisibleFlag' => 'boolean',
        'projectHeaderProjectNameCaption' => 'string',
        'projectHeaderCompanyNameVisibleFlag' => 'boolean',
        'projectHeaderCompanyNameCaption' => 'string',
        'projectHeaderOriginalDownpaymentVisibleFlag' => 'boolean',
        'projectHeaderOriginalDownpaymentCaption' => 'string',
        'projectHeaderContactNameVisibleFlag' => 'boolean',
        'projectHeaderContactNameCaption' => 'string',
        'projectHeaderAmountVisibleFlag' => 'boolean',
        'projectHeaderAmountCaption' => 'string',
        'projectHeaderBillingMethodVisibleFlag' => 'boolean',
        'projectHeaderBillingMethodCaption' => 'string',
        'projectHeaderBillingTypeVisibleFlag' => 'boolean',
        'projectHeaderBillingTypeCaption' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
    ];
}
