<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpenseBillDetail Version v2018_4
 *
 * Model for GLExportExpenseBillDetail
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ClassificationReference $expenseClass
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference $currency
 * @property boolean $billable
 * @property boolean $companyAdvance
 * @property boolean $reimbursable
 * @property float $total
 * @property integer $id
 * @property string $accountNumber
 * @property string $documentDate
 * @property string $glTypeId
 * @property string $memo
 */
class GLExportExpenseBillDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'accountNumber' => 'string',
        'billable' => 'boolean',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference',
        'companyAdvance' => 'boolean',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference',
        'documentDate' => 'string',
        'expenseClass' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ClassificationReference',
        'glTypeId' => 'string',
        'id' => 'integer',
        'memo' => 'string',
        'reimbursable' => 'boolean',
        'total' => 'float',
    ];
}
