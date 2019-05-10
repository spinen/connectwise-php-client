<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatusEmailTemplate Version v2018_4
 *
 * Model for RmaStatusEmailTemplate
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\RmaStatusReference $status
 * @property boolean $useSenderFlag
 * @property string $firstName
 * @property string $lastName
 * @property string $emailAddress
 * @property string $subject
 * @property string $body
 * @property boolean $copySenderFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 */
class RmaStatusEmailTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\RmaStatusReference',
        'useSenderFlag' => 'boolean',
        'firstName' => 'string',
        'lastName' => 'string',
        'emailAddress' => 'string',
        'subject' => 'string',
        'body' => 'string',
        'copySenderFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
    ];
}
