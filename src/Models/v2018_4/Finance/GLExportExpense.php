<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpense Version v2018_4
 * 
 * Model for GLExportExpense
 *
 * @property integer $id
 * @property Carbon\Carbon $documentDate
 * @property string $documentType
 * @property string $apAccountNumber
 * @property string $apClass
 * @property string $accountNumber
 * @property string $glClass
 * @property string $glTypeId
 * @property string $memo
 * @property string $description
 * @property Carbon\Carbon $periodStartDate
 * @property Carbon\Carbon $periodEndDate
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\MemberReference $member
 * @property string $vendorNumber
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference $company
 * @property string $companyAccountNumber
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference $currency
 * @property float $total
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\GLExportExpenseOffset $offset
 */
class GLExportExpense extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'documentDate' => 'Carbon\Carbon',
        'documentType' => 'string',
        'apAccountNumber' => 'string',
        'apClass' => 'string',
        'accountNumber' => 'string',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'memo' => 'string',
        'description' => 'string',
        'periodStartDate' => 'Carbon\Carbon',
        'periodEndDate' => 'Carbon\Carbon',
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Finance\MemberReference',
        'vendorNumber' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference',
        'companyAccountNumber' => 'string',
        'project' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ProjectReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference',
        'total' => 'float',
        'offset' => 'Spinen\ConnectWise\Models\v2018_4\Finance\GLExportExpenseOffset',
    ];
}
