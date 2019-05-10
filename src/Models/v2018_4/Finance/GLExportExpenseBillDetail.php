<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpenseBillDetail Version v2018_4
 * 
 * Model for GLExportExpenseBillDetail
 *
 * @property integer $id
 * @property string $documentDate
 * @property string $glTypeId
 * @property string $memo
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference $company
 * @property string $accountNumber
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ClassificationReference $expenseClass
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference $currency
 * @property float $total
 * @property boolean $billable
 * @property boolean $reimbursable
 * @property boolean $companyAdvance
 */
class GLExportExpenseBillDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'documentDate' => 'string',
        'glTypeId' => 'string',
        'memo' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference',
        'accountNumber' => 'string',
        'expenseClass' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ClassificationReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference',
        'total' => 'float',
        'billable' => 'boolean',
        'reimbursable' => 'boolean',
        'companyAdvance' => 'boolean',
    ];
}
