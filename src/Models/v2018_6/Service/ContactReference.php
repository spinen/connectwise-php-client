<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactReference Version v2018_6
 *
 * Model for ContactReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 */
class ContactReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
    ];
}
