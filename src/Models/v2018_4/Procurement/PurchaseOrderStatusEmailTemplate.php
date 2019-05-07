<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderStatusEmailTemplate
 *
 * @property integer $id
 * @property boolean $useSenderFlag
 * @property string $firstName
 * @property string $lastName
 * @property string $emailAddress
 * @property string $subject
 * @property string $body
 * @property boolean $copySenderFlag
 */
class PurchaseOrderStatusEmailTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'useSenderFlag' => 'boolean',
        'firstName' => 'string',
        'lastName' => 'string',
        'emailAddress' => 'string',
        'subject' => 'string',
        'body' => 'string',
        'copySenderFlag' => 'boolean',
    ];
}
