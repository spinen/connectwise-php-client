<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpense Version v2019_2
 *
 * Model for GLExportExpense
 *
 * @property Carbon\Carbon $documentDate
 * @property Carbon\Carbon $periodEndDate
 * @property Carbon\Carbon $periodStartDate
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\GLExportExpenseOffset $offset
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ProjectReference $project
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
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'companyAccountNumber' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference',
        'description' => 'string',
        'documentDate' => 'Carbon\Carbon',
        'documentType' => 'string',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Finance\MemberReference',
        'memo' => 'string',
        'offset' => 'Spinen\ConnectWise\Models\v2019_2\Finance\GLExportExpenseOffset',
        'periodEndDate' => 'Carbon\Carbon',
        'periodStartDate' => 'Carbon\Carbon',
        'project' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ProjectReference',
        'total' => 'float',
        'vendorNumber' => 'string',
    ];
}
