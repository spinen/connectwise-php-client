<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceTemplate Version v2018_5
 *
 * Model for InvoiceTemplate
 *
 * @property Metadata $_info
 * @property bool $headerAccountVisibleFlag
 * @property bool $headerDueDateVisibleFlag
 * @property bool $headerPoNumberVisibleFlag
 * @property bool $headerReferenceVisibleFlag
 * @property bool $headerShipToVisibleFlag
 * @property bool $headerTaxIdVisibleFlag
 * @property bool $headerTermsVisibleFlag
 * @property bool $headerTitleVisibleFlag
 * @property bool $logoVisibleFlag
 * @property bool $projectHeaderAmountVisibleFlag
 * @property bool $projectHeaderBillingMethodVisibleFlag
 * @property bool $projectHeaderBillingTypeVisibleFlag
 * @property bool $projectHeaderCompanyNameVisibleFlag
 * @property bool $projectHeaderContactNameVisibleFlag
 * @property bool $projectHeaderOriginalDownpaymentVisibleFlag
 * @property bool $projectHeaderProjectNameVisibleFlag
 * @property bool $remitToVisibleFlag
 * @property bool $serviceHeaderAmountVisibleFlag
 * @property bool $serviceHeaderBillingMethodVisibleFlag
 * @property bool $serviceHeaderBundledTicketsVisibleFlag
 * @property bool $serviceHeaderClosedTasksVisibleFlag
 * @property bool $serviceHeaderCompanyNameVisibleFlag
 * @property bool $serviceHeaderContactNameVisibleFlag
 * @property bool $serviceHeaderDetailDescriptionVisibleFlag
 * @property bool $serviceHeaderOpenTasksVisibleFlag
 * @property bool $serviceHeaderResolutionVisibleFlag
 * @property bool $serviceHeaderSummaryVisibleFlag
 * @property bool $serviceHeaderTicketNumberVisibleFlag
 * @property float $marginBottom
 * @property float $marginLeft
 * @property float $marginRight
 * @property float $marginTop
 * @property int $id
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
        '_info' => Metadata::class,
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
