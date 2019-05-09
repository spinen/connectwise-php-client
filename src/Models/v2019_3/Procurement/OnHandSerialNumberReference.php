<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OnHandSerialNumberReference Version v2019_3
 * 
 * Model for OnHandSerialNumberReference
 *
 * @property integer $id
 * @property string $serialNumber
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
 */
class OnHandSerialNumberReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'serialNumber' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
    ];
}
