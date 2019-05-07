<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTicketLink
 *
 * @property integer $id
 * @property string $name
 * @property boolean $enabledFlag
 * @property string $linkText
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
        'id' => 'integer',
        'name' => 'string',
        'enabledFlag' => 'boolean',
        'linkText' => 'string',
        'url' => 'string',
    ];
}
