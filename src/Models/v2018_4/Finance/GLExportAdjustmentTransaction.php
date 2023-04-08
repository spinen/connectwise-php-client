<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportAdjustmentTransaction Version v2018_4
 *
 * Model for GLExportAdjustmentTransaction
 *
 * @property Carbon $documentDate
 * @property array $adjustmentDetail
 * @property string $accountNumber
 * @property string $adjustmentDescription
 * @property string $documentType
 * @property string $glClass
 * @property string $glTypeID
 * @property string $id
 * @property string $memo
 */
class GLExportAdjustmentTransaction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'accountNumber' => 'string',
        'adjustmentDescription' => 'string',
        'adjustmentDetail' => 'array',
        'documentDate' => Carbon::class,
        'documentType' => 'string',
        'glClass' => 'string',
        'glTypeID' => 'string',
        'id' => 'string',
        'memo' => 'string',
    ];
}
