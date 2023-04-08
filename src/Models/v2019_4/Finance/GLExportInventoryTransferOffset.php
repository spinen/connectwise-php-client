<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportInventoryTransferOffset Version v2019_4
 *
 * Model for GLExportInventoryTransferOffset
 *
 * @property Carbon $documentDate
 * @property float $total
 * @property int $id
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
        'documentDate' => Carbon::class,
        'documentType' => 'string',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'memo' => 'string',
        'total' => 'float',
    ];
}
