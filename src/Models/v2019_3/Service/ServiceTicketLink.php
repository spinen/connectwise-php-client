<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTicketLink Version v2019_3
 *
 * Model for ServiceTicketLink
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 * @property boolean $enabledFlag
 * @property integer $id
 * @property string $linkText
 * @property string $name
 * @property string $url
 */
class ServiceTicketLink extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
        'enabledFlag' => 'boolean',
        'id' => 'integer',
        'linkText' => 'string',
        'name' => 'string',
        'url' => 'string',
    ];
}
