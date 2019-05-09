<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportInventoryTransferOffset Version v2018_6
 * 
 * Model for GLExportInventoryTransferOffset
 *
 * @property integer $id
 * @property string $documentType
 * @property string $documentDate
 * @property string $accountNumber
 * @property string $glClass
 * @property number $total
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
        'documentDate' => 'string',
        'accountNumber' => 'string',
        'glClass' => 'string',
        'total' => 'number',
        'memo' => 'string',
        'description' => 'string',
        'glTypeId' => 'string',
    ];
}
