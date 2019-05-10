<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSignoff Version v2019_2
 *
 * Model for ServiceSignoff
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $visibleLogoFlag
 * @property boolean $companyInfoFlag
 * @property boolean $billingTermsFlag
 * @property boolean $summaryFlag
 * @property boolean $discussionFlag
 * @property boolean $taskFlag
 * @property string $task
 * @property boolean $configurationsFlag
 * @property boolean $internalNotesFlag
 * @property boolean $resolutionFlag
 * @property boolean $timeFlag
 * @property boolean $timeMemberFlag
 * @property boolean $timeDateFlag
 * @property boolean $timeStartEndFlag
 * @property boolean $timeBillFlag
 * @property boolean $timeHoursFlag
 * @property boolean $timeRateFlag
 * @property boolean $timeExtendedAmountFlag
 * @property boolean $timeWorkTypeFlag
 * @property boolean $timeAgreementFlag
 * @property boolean $timeNotesFlag
 * @property boolean $timeManualFlag
 * @property integer $timeManualEntry
 * @property boolean $timeTaxFlag
 * @property boolean $expenseFlag
 * @property boolean $expenseDateFlag
 * @property boolean $expenseMemberFlag
 * @property boolean $expenseTypeFlag
 * @property boolean $expenseBillFlag
 * @property boolean $expenseAmountFlag
 * @property boolean $expenseAgreementFlag
 * @property boolean $expenseNotesFlag
 * @property boolean $expenseTaxFlag
 * @property boolean $expenseManualFlag
 * @property integer $expenseManualEntry
 * @property boolean $productFlag
 * @property boolean $productDescriptionFlag
 * @property boolean $productBillFlag
 * @property boolean $productQuantityFlag
 * @property boolean $productPriceFlag
 * @property boolean $productExtendedAmountFlag
 * @property boolean $productAgreementFlag
 * @property boolean $productManualFlag
 * @property integer $productManualEntry
 * @property boolean $productTaxFlag
 * @property boolean $technicianSignoffFlag
 * @property boolean $customerSignoffTextFlag
 * @property string $customerSignoffText
 * @property boolean $customerSignoffFieldsFlag
 * @property boolean $billingMethodsTextFlag
 * @property string $billingMethodsText
 * @property boolean $creditCardFieldsFlag
 * @property boolean $defaultFFFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 */
class ServiceSignoff extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'visibleLogoFlag' => 'boolean',
        'companyInfoFlag' => 'boolean',
        'billingTermsFlag' => 'boolean',
        'summaryFlag' => 'boolean',
        'discussionFlag' => 'boolean',
        'taskFlag' => 'boolean',
        'task' => 'string',
        'configurationsFlag' => 'boolean',
        'internalNotesFlag' => 'boolean',
        'resolutionFlag' => 'boolean',
        'timeFlag' => 'boolean',
        'timeMemberFlag' => 'boolean',
        'timeDateFlag' => 'boolean',
        'timeStartEndFlag' => 'boolean',
        'timeBillFlag' => 'boolean',
        'timeHoursFlag' => 'boolean',
        'timeRateFlag' => 'boolean',
        'timeExtendedAmountFlag' => 'boolean',
        'timeWorkTypeFlag' => 'boolean',
        'timeAgreementFlag' => 'boolean',
        'timeNotesFlag' => 'boolean',
        'timeManualFlag' => 'boolean',
        'timeManualEntry' => 'integer',
        'timeTaxFlag' => 'boolean',
        'expenseFlag' => 'boolean',
        'expenseDateFlag' => 'boolean',
        'expenseMemberFlag' => 'boolean',
        'expenseTypeFlag' => 'boolean',
        'expenseBillFlag' => 'boolean',
        'expenseAmountFlag' => 'boolean',
        'expenseAgreementFlag' => 'boolean',
        'expenseNotesFlag' => 'boolean',
        'expenseTaxFlag' => 'boolean',
        'expenseManualFlag' => 'boolean',
        'expenseManualEntry' => 'integer',
        'productFlag' => 'boolean',
        'productDescriptionFlag' => 'boolean',
        'productBillFlag' => 'boolean',
        'productQuantityFlag' => 'boolean',
        'productPriceFlag' => 'boolean',
        'productExtendedAmountFlag' => 'boolean',
        'productAgreementFlag' => 'boolean',
        'productManualFlag' => 'boolean',
        'productManualEntry' => 'integer',
        'productTaxFlag' => 'boolean',
        'technicianSignoffFlag' => 'boolean',
        'customerSignoffTextFlag' => 'boolean',
        'customerSignoffText' => 'string',
        'customerSignoffFieldsFlag' => 'boolean',
        'billingMethodsTextFlag' => 'boolean',
        'billingMethodsText' => 'string',
        'creditCardFieldsFlag' => 'boolean',
        'defaultFFFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
    ];
}
