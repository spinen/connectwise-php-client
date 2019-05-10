<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportInventoryTransferOffset Version v2019_1
 *
 * Model for GLExportInventoryTransferOffset
 *
 * @property integer $id
 * @property string $documentType
 * @property Carbon\Carbon $documentDate
 * @property string $accountNumber
 * @property string $glClass
 * @property float $total
 * @property string $memo
 * @property string $description
 * @property string $glTypeId
 */
class GLExportInventoryTransferOffset extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'documentType' => 'string',
        'documentDate' => 'Carbon\Carbon',
        'accountNumber' => 'string',
        'glClass' => 'string',
        'total' => 'float',
        'memo' => 'string',
        'description' => 'string',
        'glTypeId' => 'string',
    ];
}
