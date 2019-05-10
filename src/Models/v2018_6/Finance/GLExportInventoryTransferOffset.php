<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportInventoryTransferOffset Version v2018_6
 *
 * Model for GLExportInventoryTransferOffset
 *
 * @property Carbon\Carbon $documentDate
 * @property float $total
 * @property integer $id
 * @property string $accountNumber
 * @property string $description
 * @property string $documentType
 * @property string $glClass
 * @property string $glTypeId
 * @property string $memo
 */
class GLExportInventoryTransferOffset extends Model
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
        'memo' => 'string',
        'total' => 'float',
    ];
}
