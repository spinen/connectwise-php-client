<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTicketLink Version v2019_2
 *
 * Model for ServiceTicketLink
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'enabledFlag' => 'boolean',
        'id' => 'integer',
        'linkText' => 'string',
        'name' => 'string',
        'url' => 'string'
    ];
}
