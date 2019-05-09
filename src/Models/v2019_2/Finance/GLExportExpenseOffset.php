<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpenseOffset Version v2019_2
 * 
 * Model for GLExportExpenseOffset
 *
 * @property integer $id
 * @property string $documentDate
 * @property string $documentType
 * @property string $accountNumber
 * @property string $glTypeId
 * @property string $glClass
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\MemberReference $member
 * @property string $memo
 * @property string $description
 * @property number $total
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
        'documentDate' => 'string',
        'documentType' => 'string',
        'accountNumber' => 'string',
        'glTypeId' => 'string',
        'glClass' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Finance\MemberReference',
        'memo' => 'string',
        'description' => 'string',
        'total' => 'number',
    ];
}
