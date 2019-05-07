<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Order
 *
 * @property integer $id
 * @property string $phone
 * @property string $phoneExt
 * @property string $email
 * @property carbon $orderDate
 * @property carbon $dueDate
 * @property string $poNumber
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property string $notes
 * @property boolean $billClosedFlag
 * @property boolean $billShippedFlag
 * @property boolean $restrictDownpaymentFlag
 * @property string $description
 * @property boolean $topCommentFlag
 * @property boolean $bottomCommentFlag
 * @property array $productIds
 * @property array $documentIds
 * @property array $invoiceIds
 * @property array $configIds
 * @property double $total
 * @property double $taxTotal
 * @property integer $companyLocationId
 * @property array $customFields
 */
class Order extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'phone' => 'string',
        'phoneExt' => 'string',
        'email' => 'string',
        'orderDate' => 'carbon',
        'dueDate' => 'carbon',
        'poNumber' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'notes' => 'string',
        'billClosedFlag' => 'boolean',
        'billShippedFlag' => 'boolean',
        'restrictDownpaymentFlag' => 'boolean',
        'description' => 'string',
        'topCommentFlag' => 'boolean',
        'bottomCommentFlag' => 'boolean',
        'productIds' => 'array',
        'documentIds' => 'array',
        'invoiceIds' => 'array',
        'configIds' => 'array',
        'total' => 'double',
        'taxTotal' => 'double',
        'companyLocationId' => 'integer',
        'customFields' => 'array',
    ];
}
