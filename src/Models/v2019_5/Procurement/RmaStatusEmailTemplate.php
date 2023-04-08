<?php

namespace Spinen\ConnectWise\Models\v2019_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatusEmailTemplate Version v2019_5
 *
 * Model for RmaStatusEmailTemplate
 *
 * @property Metadata $_info
 * @property RmaStatusReference $status
 * @property bool $copySenderFlag
 * @property bool $useSenderFlag
 * @property int $id
 * @property string $body
 * @property string $emailAddress
 * @property string $firstName
 * @property string $lastName
 * @property string $subject
 */
class RmaStatusEmailTemplate extends Model
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
        'status' => RmaStatusReference::class,
        'subject' => 'string',
        'useSenderFlag' => 'boolean',
    ];
}
