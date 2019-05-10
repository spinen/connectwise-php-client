<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpenseBill Version v2018_5
 *
 * Model for GLExportExpenseBill
 *
 * @property integer $id
 * @property string $documentDate
 * @property string $documentType
 * @property string $documentNumber
 * @property string $memo
 * @property string $glClass
 * @property string $apAccountNumber
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\MemberReference $member
 * @property string $vendorNumber
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\CurrencyReference $currency
 * @property float $total
 * @property array $detail
 */
class GLExportExpenseBill extends Model
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
        'documentNumber' => 'string',
        'memo' => 'string',
        'glClass' => 'string',
        'apAccountNumber' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Finance\MemberReference',
        'vendorNumber' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2018_5\Finance\CurrencyReference',
        'total' => 'float',
        'detail' => 'array',
    ];
}
