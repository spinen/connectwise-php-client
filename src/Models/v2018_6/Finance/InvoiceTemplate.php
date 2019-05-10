<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceTemplate Version v2018_6
 *
 * Model for InvoiceTemplate
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property boolean $headerAccountVisibleFlag
 * @property boolean $headerDueDateVisibleFlag
 * @property boolean $headerPoNumberVisibleFlag
 * @property boolean $headerReferenceVisibleFlag
 * @property boolean $headerShipToVisibleFlag
 * @property boolean $headerTaxIdVisibleFlag
 * @property boolean $headerTermsVisibleFlag
 * @property boolean $headerTitleVisibleFlag
 * @property boolean $logoVisibleFlag
 * @property boolean $projectHeaderAmountVisibleFlag
 * @property boolean $projectHeaderBillingMethodVisibleFlag
 * @property boolean $projectHeaderBillingTypeVisibleFlag
 * @property boolean $projectHeaderCompanyNameVisibleFlag
 * @property boolean $projectHeaderContactNameVisibleFlag
 * @property boolean $projectHeaderOriginalDownpaymentVisibleFlag
 * @property boolean $projectHeaderProjectNameVisibleFlag
 * @property boolean $remitToVisibleFlag
 * @property boolean $serviceHeaderAmountVisibleFlag
 * @property boolean $serviceHeaderBillingMethodVisibleFlag
 * @property boolean $serviceHeaderBundledTicketsVisibleFlag
 * @property boolean $serviceHeaderClosedTasksVisibleFlag
 * @property boolean $serviceHeaderCompanyNameVisibleFlag
 * @property boolean $serviceHeaderContactNameVisibleFlag
 * @property boolean $serviceHeaderDetailDescriptionVisibleFlag
 * @property boolean $serviceHeaderOpenTasksVisibleFlag
 * @property boolean $serviceHeaderResolutionVisibleFlag
 * @property boolean $serviceHeaderSummaryVisibleFlag
 * @property boolean $serviceHeaderTicketNumberVisibleFlag
 * @property float $marginBottom
 * @property float $marginLeft
 * @property float $marginRight
 * @property float $marginTop
 * @property integer $id
 * @property string $headerAccountCaption
 * @property string $headerAddressPosition
 * @property string $headerDueDateCaption
 * @property string $headerLogoPosition
 * @property string $headerPoNumberCaption
 * @property string $headerReferenceCaption
 * @property string $headerShipToCaption
 * @property string $headerTaxIdCaption
 * @property string $headerTermsCaption
 * @property string $headerTitleCaption
 * @property string $headerTitleFont
 * @property string $headerTitlePosition
 * @property string $name
 * @property string $projectHeaderAmountCaption
 * @property string $projectHeaderBillingMethodCaption
 * @property string $projectHeaderBillingTypeCaption
 * @property string $projectHeaderCompanyNameCaption
 * @property string $projectHeaderContactNameCaption
 * @property string $projectHeaderOriginalDownpaymentCaption
 * @property string $projectHeaderProjectNameCaption
 * @property string $serviceHeaderAmountCaption
 * @property string $serviceHeaderBillingMethodCaption
 * @property string $serviceHeaderCompanyNameCaption
 * @property string $serviceHeaderContactNameCaption
 * @property string $serviceHeaderDetailDescriptionCaption
 * @property string $serviceHeaderResolutionCaption
 * @property string $serviceHeaderSummaryCaption
 * @property string $serviceHeaderTicketNumberCaption
 */
class InvoiceTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'headerAccountCaption' => 'string',
        'headerAccountVisibleFlag' => 'boolean',
        'headerAddressPosition' => 'string',
        'headerDueDateCaption' => 'string',
        'headerDueDateVisibleFlag' => 'boolean',
        'headerLogoPosition' => 'string',
        'headerPoNumberCaption' => 'string',
        'headerPoNumberVisibleFlag' => 'boolean',
        'headerReferenceCaption' => 'string',
        'headerReferenceVisibleFlag' => 'boolean',
        'headerShipToCaption' => 'string',
        'headerShipToVisibleFlag' => 'boolean',
        'headerTaxIdCaption' => 'string',
        'headerTaxIdVisibleFlag' => 'boolean',
        'headerTermsCaption' => 'string',
        'headerTermsVisibleFlag' => 'boolean',
        'headerTitleCaption' => 'string',
        'headerTitleFont' => 'string',
        'headerTitlePosition' => 'string',
        'headerTitleVisibleFlag' => 'boolean',
        'id' => 'integer',
        'logoVisibleFlag' => 'boolean',
        'marginBottom' => 'float',
        'marginLeft' => 'float',
        'marginRight' => 'float',
        'marginTop' => 'float',
        'name' => 'string',
        'projectHeaderAmountCaption' => 'string',
        'projectHeaderAmountVisibleFlag' => 'boolean',
        'projectHeaderBillingMethodCaption' => 'string',
        'projectHeaderBillingMethodVisibleFlag' => 'boolean',
        'projectHeaderBillingTypeCaption' => 'string',
        'projectHeaderBillingTypeVisibleFlag' => 'boolean',
        'projectHeaderCompanyNameCaption' => 'string',
        'projectHeaderCompanyNameVisibleFlag' => 'boolean',
        'projectHeaderContactNameCaption' => 'string',
        'projectHeaderContactNameVisibleFlag' => 'boolean',
        'projectHeaderOriginalDownpaymentCaption' => 'string',
        'projectHeaderOriginalDownpaymentVisibleFlag' => 'boolean',
        'projectHeaderProjectNameCaption' => 'string',
        'projectHeaderProjectNameVisibleFlag' => 'boolean',
        'remitToVisibleFlag' => 'boolean',
        'serviceHeaderAmountCaption' => 'string',
        'serviceHeaderAmountVisibleFlag' => 'boolean',
        'serviceHeaderBillingMethodCaption' => 'string',
        'serviceHeaderBillingMethodVisibleFlag' => 'boolean',
        'serviceHeaderBundledTicketsVisibleFlag' => 'boolean',
        'serviceHeaderClosedTasksVisibleFlag' => 'boolean',
        'serviceHeaderCompanyNameCaption' => 'string',
        'serviceHeaderCompanyNameVisibleFlag' => 'boolean',
        'serviceHeaderContactNameCaption' => 'string',
        'serviceHeaderContactNameVisibleFlag' => 'boolean',
        'serviceHeaderDetailDescriptionCaption' => 'string',
        'serviceHeaderDetailDescriptionVisibleFlag' => 'boolean',
        'serviceHeaderOpenTasksVisibleFlag' => 'boolean',
        'serviceHeaderResolutionCaption' => 'string',
        'serviceHeaderResolutionVisibleFlag' => 'boolean',
        'serviceHeaderSummaryCaption' => 'string',
        'serviceHeaderSummaryVisibleFlag' => 'boolean',
        'serviceHeaderTicketNumberCaption' => 'string',
        'serviceHeaderTicketNumberVisibleFlag' => 'boolean',
    ];
}
