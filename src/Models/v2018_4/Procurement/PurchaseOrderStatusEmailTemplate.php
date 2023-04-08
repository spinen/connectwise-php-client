<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderStatusEmailTemplate Version v2018_4
 *
 * Model for PurchaseOrderStatusEmailTemplate
 *
 * @property Metadata $_info
 * @property PurchaseOrderStatusReference $status
 * @property bool $copySenderFlag
 * @property bool $useSenderFlag
 * @property int $id
 * @property string $body
 * @property string $emailAddress
 * @property string $firstName
 * @property string $lastName
 * @property string $subject
 */
class PurchaseOrderStatusEmailTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'body' => 'string',
        'copySenderFlag' => 'boolean',
        'emailAddress' => 'string',
        'firstName' => 'string',
        'id' => 'integer',
        'lastName' => 'string',
        'status' => PurchaseOrderStatusReference::class,
        'subject' => 'string',
        'useSenderFlag' => 'boolean',
    ];
}
