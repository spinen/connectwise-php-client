<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpenseBillDetail Version v2019_4
 *
 * Model for GLExportExpenseBillDetail
 *
 * @property ClassificationReference $expenseClass
 * @property CompanyReference $company
 * @property CurrencyReference $currency
 * @property bool $billable
 * @property bool $companyAdvance
 * @property bool $reimbursable
 * @property float $total
 * @property int $id
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
        'company' => CompanyReference::class,
        'companyAdvance' => 'boolean',
        'currency' => CurrencyReference::class,
        'documentDate' => 'string',
        'expenseClass' => ClassificationReference::class,
        'glTypeId' => 'string',
        'id' => 'integer',
        'memo' => 'string',
        'reimbursable' => 'boolean',
        'total' => 'float',
    ];
}
