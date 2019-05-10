<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpenseOffset Version v2019_1
 *
 * Model for GLExportExpenseOffset
 *
 * @property Carbon\Carbon $documentDate
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\MemberReference $member
 * @property float $total
 * @property integer $id
 * @property string $accountNumber
 * @property string $description
 * @property string $documentType
 * @property string $glClass
 * @property string $glTypeId
 * @property string $memo
 */
class GLExportExpenseOffset extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'accountNumber' => 'string',
        'description' => 'string',
        'documentDate' => 'Carbon\Carbon',
        'documentType' => 'string',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Finance\MemberReference',
        'memo' => 'string',
        'total' => 'float',
    ];
}
