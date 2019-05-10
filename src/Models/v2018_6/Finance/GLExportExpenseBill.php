<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpenseBill Version v2018_6
 *
 * Model for GLExportExpenseBill
 *
 * @property CurrencyReference $currency
 * @property MemberReference $member
 * @property array $detail
 * @property float $total
 * @property integer $id
 * @property string $apAccountNumber
 * @property string $documentDate
 * @property string $documentNumber
 * @property string $documentType
 * @property string $glClass
 * @property string $memo
 * @property string $vendorNumber
 */
class GLExportExpenseBill extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'apAccountNumber' => 'string',
        'currency' => CurrencyReference::class,
        'detail' => 'array',
        'documentDate' => 'string',
        'documentNumber' => 'string',
        'documentType' => 'string',
        'glClass' => 'string',
        'id' => 'integer',
        'member' => MemberReference::class,
        'memo' => 'string',
        'total' => 'float',
        'vendorNumber' => 'string'
    ];
}
