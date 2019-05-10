<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportExpenseBill Version v2019_2
 *
 * Model for GLExportExpenseBill
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\MemberReference $member
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
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference',
        'detail' => 'array',
        'documentDate' => 'string',
        'documentNumber' => 'string',
        'documentType' => 'string',
        'glClass' => 'string',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Finance\MemberReference',
        'memo' => 'string',
        'total' => 'float',
        'vendorNumber' => 'string',
    ];
}
