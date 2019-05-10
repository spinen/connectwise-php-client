<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpenseOffset Version v2018_5
 * 
 * Model for GLExportExpenseOffset
 *
 * @property integer $id
 * @property Carbon\Carbon $documentDate
 * @property string $documentType
 * @property string $accountNumber
 * @property string $glTypeId
 * @property string $glClass
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\MemberReference $member
 * @property string $memo
 * @property string $description
 * @property float $total
 */
class GLExportExpenseOffset extends Model
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
        'accountNumber' => 'string',
        'glTypeId' => 'string',
        'glClass' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Finance\MemberReference',
        'memo' => 'string',
        'description' => 'string',
        'total' => 'float',
    ];
}
