<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpense Version v2019_4
 *
 * Model for GLExportExpense
 *
 * @property Carbon $documentDate
 * @property Carbon $periodEndDate
 * @property Carbon $periodStartDate
 * @property CompanyReference $company
 * @property CurrencyReference $currency
 * @property GLExportExpenseOffset $offset
 * @property MemberReference $member
 * @property ProjectReference $project
 * @property float $total
 * @property integer $id
 * @property string $accountNumber
 * @property string $apAccountNumber
 * @property string $apClass
 * @property string $companyAccountNumber
 * @property string $description
 * @property string $documentType
 * @property string $glClass
 * @property string $glTypeId
 * @property string $memo
 * @property string $vendorNumber
 */
class GLExportExpense extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'accountNumber' => 'string',
        'apAccountNumber' => 'string',
        'apClass' => 'string',
        'company' => CompanyReference::class,
        'companyAccountNumber' => 'string',
        'currency' => CurrencyReference::class,
        'description' => 'string',
        'documentDate' => Carbon::class,
        'documentType' => 'string',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'member' => MemberReference::class,
        'memo' => 'string',
        'offset' => GLExportExpenseOffset::class,
        'periodEndDate' => Carbon::class,
        'periodStartDate' => Carbon::class,
        'project' => ProjectReference::class,
        'total' => 'float',
        'vendorNumber' => 'string'
    ];
}
