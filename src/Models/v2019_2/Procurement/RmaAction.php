<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaAction Version v2019_2
 *
 * Model for RmaAction
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $name
 */
class RmaAction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
    ];
}
