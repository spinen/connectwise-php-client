<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpenseOffset Version v2019_5
 *
 * Model for GLExportExpenseOffset
 *
 * @property Carbon $documentDate
 * @property MemberReference $member
 * @property float $total
 * @property int $id
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
        'documentDate' => Carbon::class,
        'documentType' => 'string',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'member' => MemberReference::class,
        'memo' => 'string',
        'total' => 'float',
    ];
}
