<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OrderStatusEmailTemplate Version v2018_5
 *
 * Model for OrderStatusEmailTemplate
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\OrderStatusReference $status
 * @property boolean $copySenderFlag
 * @property boolean $useSenderFlag
 * @property integer $id
 * @property string $body
 * @property string $emailAddress
 * @property string $firstName
 * @property string $lastName
 * @property string $subject
 */
class OrderStatusEmailTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
        'body' => 'string',
        'copySenderFlag' => 'boolean',
        'emailAddress' => 'string',
        'firstName' => 'string',
        'id' => 'integer',
        'lastName' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2018_5\Sales\OrderStatusReference',
        'subject' => 'string',
        'useSenderFlag' => 'boolean',
    ];
}
