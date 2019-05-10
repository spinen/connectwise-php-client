<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSignoff Version v2019_1
 *
 * Model for ServiceSignoff
 *
 * @property Metadata $_info
 * @property boolean $billingMethodsTextFlag
 * @property boolean $billingTermsFlag
 * @property boolean $companyInfoFlag
 * @property boolean $configurationsFlag
 * @property boolean $creditCardFieldsFlag
 * @property boolean $customerSignoffFieldsFlag
 * @property boolean $customerSignoffTextFlag
 * @property boolean $defaultFFFlag
 * @property boolean $defaultFlag
 * @property boolean $discussionFlag
 * @property boolean $expenseAgreementFlag
 * @property boolean $expenseAmountFlag
 * @property boolean $expenseBillFlag
 * @property boolean $expenseDateFlag
 * @property boolean $expenseFlag
 * @property boolean $expenseManualFlag
 * @property boolean $expenseMemberFlag
 * @property boolean $expenseNotesFlag
 * @property boolean $expenseTaxFlag
 * @property boolean $expenseTypeFlag
 * @property boolean $internalNotesFlag
 * @property boolean $productAgreementFlag
 * @property boolean $productBillFlag
 * @property boolean $productDescriptionFlag
 * @property boolean $productExtendedAmountFlag
 * @property boolean $productFlag
 * @property boolean $productManualFlag
 * @property boolean $productPriceFlag
 * @property boolean $productQuantityFlag
 * @property boolean $productTaxFlag
 * @property boolean $resolutionFlag
 * @property boolean $summaryFlag
 * @property boolean $taskFlag
 * @property boolean $technicianSignoffFlag
 * @property boolean $timeAgreementFlag
 * @property boolean $timeBillFlag
 * @property boolean $timeDateFlag
 * @property boolean $timeExtendedAmountFlag
 * @property boolean $timeFlag
 * @property boolean $timeHoursFlag
 * @property boolean $timeManualFlag
 * @property boolean $timeMemberFlag
 * @property boolean $timeNotesFlag
 * @property boolean $timeRateFlag
 * @property boolean $timeStartEndFlag
 * @property boolean $timeTaxFlag
 * @property boolean $timeWorkTypeFlag
 * @property boolean $visibleLogoFlag
 * @property integer $expenseManualEntry
 * @property integer $id
 * @property integer $productManualEntry
 * @property integer $timeManualEntry
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
        'visibleLogoFlag' => 'boolean'
    ];
}
