<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTicketLink Version v2019_3
 * 
 * Model for ServiceTicketLink
 *
 * @property integer $id
 * @property string $name
 * @property boolean $enabledFlag
 * @property string $linkText
 * @property string $url
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 */
class ServiceTicketLink extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'enabledFlag' => 'boolean',
        'linkText' => 'string',
        'url' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
    ];
}
