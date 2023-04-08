<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSignoff Version v2019_2
 *
 * Model for ServiceSignoff
 *
 * @property Metadata $_info
 * @property bool $billingMethodsTextFlag
 * @property bool $billingTermsFlag
 * @property bool $companyInfoFlag
 * @property bool $configurationsFlag
 * @property bool $creditCardFieldsFlag
 * @property bool $customerSignoffFieldsFlag
 * @property bool $customerSignoffTextFlag
 * @property bool $defaultFFFlag
 * @property bool $defaultFlag
 * @property bool $discussionFlag
 * @property bool $expenseAgreementFlag
 * @property bool $expenseAmountFlag
 * @property bool $expenseBillFlag
 * @property bool $expenseDateFlag
 * @property bool $expenseFlag
 * @property bool $expenseManualFlag
 * @property bool $expenseMemberFlag
 * @property bool $expenseNotesFlag
 * @property bool $expenseTaxFlag
 * @property bool $expenseTypeFlag
 * @property bool $internalNotesFlag
 * @property bool $productAgreementFlag
 * @property bool $productBillFlag
 * @property bool $productDescriptionFlag
 * @property bool $productExtendedAmountFlag
 * @property bool $productFlag
 * @property bool $productManualFlag
 * @property bool $productPriceFlag
 * @property bool $productQuantityFlag
 * @property bool $productTaxFlag
 * @property bool $resolutionFlag
 * @property bool $summaryFlag
 * @property bool $taskFlag
 * @property bool $technicianSignoffFlag
 * @property bool $timeAgreementFlag
 * @property bool $timeBillFlag
 * @property bool $timeDateFlag
 * @property bool $timeExtendedAmountFlag
 * @property bool $timeFlag
 * @property bool $timeHoursFlag
 * @property bool $timeManualFlag
 * @property bool $timeMemberFlag
 * @property bool $timeNotesFlag
 * @property bool $timeRateFlag
 * @property bool $timeStartEndFlag
 * @property bool $timeTaxFlag
 * @property bool $timeWorkTypeFlag
 * @property bool $visibleLogoFlag
 * @property int $expenseManualEntry
 * @property int $id
 * @property int $productManualEntry
 * @property int $timeManualEntry
 * @property string $billingMethodsText
 * @property string $customerSignoffText
 * @property string $name
 * @property string $task
 */
class ServiceSignoff extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'billingMethodsText' => 'string',
        'billingMethodsTextFlag' => 'boolean',
        'billingTermsFlag' => 'boolean',
        'companyInfoFlag' => 'boolean',
        'configurationsFlag' => 'boolean',
        'creditCardFieldsFlag' => 'boolean',
        'customerSignoffFieldsFlag' => 'boolean',
        'customerSignoffText' => 'string',
        'customerSignoffTextFlag' => 'boolean',
        'defaultFFFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'discussionFlag' => 'boolean',
        'expenseAgreementFlag' => 'boolean',
        'expenseAmountFlag' => 'boolean',
        'expenseBillFlag' => 'boolean',
        'expenseDateFlag' => 'boolean',
        'expenseFlag' => 'boolean',
        'expenseManualEntry' => 'integer',
        'expenseManualFlag' => 'boolean',
        'expenseMemberFlag' => 'boolean',
        'expenseNotesFlag' => 'boolean',
        'expenseTaxFlag' => 'boolean',
        'expenseTypeFlag' => 'boolean',
        'id' => 'integer',
        'internalNotesFlag' => 'boolean',
        'name' => 'string',
        'productAgreementFlag' => 'boolean',
        'productBillFlag' => 'boolean',
        'productDescriptionFlag' => 'boolean',
        'productExtendedAmountFlag' => 'boolean',
        'productFlag' => 'boolean',
        'productManualEntry' => 'integer',
        'productManualFlag' => 'boolean',
        'productPriceFlag' => 'boolean',
        'productQuantityFlag' => 'boolean',
        'productTaxFlag' => 'boolean',
        'resolutionFlag' => 'boolean',
        'summaryFlag' => 'boolean',
        'task' => 'string',
        'taskFlag' => 'boolean',
        'technicianSignoffFlag' => 'boolean',
        'timeAgreementFlag' => 'boolean',
        'timeBillFlag' => 'boolean',
        'timeDateFlag' => 'boolean',
        'timeExtendedAmountFlag' => 'boolean',
        'timeFlag' => 'boolean',
        'timeHoursFlag' => 'boolean',
        'timeManualEntry' => 'integer',
        'timeManualFlag' => 'boolean',
        'timeMemberFlag' => 'boolean',
        'timeNotesFlag' => 'boolean',
        'timeRateFlag' => 'boolean',
        'timeStartEndFlag' => 'boolean',
        'timeTaxFlag' => 'boolean',
        'timeWorkTypeFlag' => 'boolean',
        'visibleLogoFlag' => 'boolean',
    ];
}
