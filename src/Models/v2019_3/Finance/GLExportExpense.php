<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpense Version v2019_3
 * 
 * Model for GLExportExpense
 *
 * @property integer $id
 * @property string $documentDate
 * @property string $documentType
 * @property string $apAccountNumber
 * @property string $apClass
 * @property string $accountNumber
 * @property string $glClass
 * @property string $glTypeId
 * @property string $memo
 * @property string $description
 * @property string $periodStartDate
 * @property string $periodEndDate
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\MemberReference $member
 * @property string $vendorNumber
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference $company
 * @property string $companyAccountNumber
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference $currency
 * @property number $total
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\GLExportExpenseOffset $offset
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
        'documentDate' => 'string',
        'documentType' => 'string',
        'apAccountNumber' => 'string',
        'apClass' => 'string',
        'accountNumber' => 'string',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'memo' => 'string',
        'description' => 'string',
        'periodStartDate' => 'string',
        'periodEndDate' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Finance\MemberReference',
        'vendorNumber' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference',
        'companyAccountNumber' => 'string',
        'project' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ProjectReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference',
        'total' => 'number',
        'offset' => 'Spinen\ConnectWise\Models\v2019_3\Finance\GLExportExpenseOffset',
    ];
}
