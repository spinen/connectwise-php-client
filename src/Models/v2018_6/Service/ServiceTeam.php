<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTeam
 *
 * @property integer $id
 * @property string $name
 * @property boolean $deleteNotifyFlag
 */
class ServiceTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'deleteNotifyFlag' => 'boolean',
    ];
}
