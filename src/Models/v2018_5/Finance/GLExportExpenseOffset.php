<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpenseOffset Version v2018_5
 *
 * Model for GLExportExpenseOffset
 *
 * @property Carbon\Carbon $documentDate
 * @property MemberReference $member
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
        'documentDate' => Carbon\Carbon::class,
        'documentType' => 'string',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'member' => MemberReference::class,
        'memo' => 'string',
        'total' => 'float',
    ];
}
