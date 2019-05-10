<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatusEmailTemplate Version v2018_6
 *
 * Model for RmaStatusEmailTemplate
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\RmaStatusReference $status
 * @property boolean $copySenderFlag
 * @property boolean $useSenderFlag
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
        'body' => 'string',
        'copySenderFlag' => 'boolean',
        'emailAddress' => 'string',
        'firstName' => 'string',
        'id' => 'integer',
        'lastName' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\RmaStatusReference',
        'subject' => 'string',
        'useSenderFlag' => 'boolean',
    ];
}
