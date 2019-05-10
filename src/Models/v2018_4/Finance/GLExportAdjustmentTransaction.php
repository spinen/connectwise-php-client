<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportAdjustmentTransaction Version v2018_4
 * 
 * Model for GLExportAdjustmentTransaction
 *
 * @property string $id
 * @property string $documentType
 * @property Carbon\Carbon $documentDate
 * @property string $glTypeID
 * @property string $accountNumber
 * @property string $memo
 * @property string $glClass
 * @property string $adjustmentDescription
 * @property array $adjustmentDetail
 */
class GLExportAdjustmentTransaction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'documentType' => 'string',
        'documentDate' => 'Carbon\Carbon',
        'glTypeID' => 'string',
        'accountNumber' => 'string',
        'memo' => 'string',
        'glClass' => 'string',
        'adjustmentDescription' => 'string',
        'adjustmentDetail' => 'array',
    ];
}
