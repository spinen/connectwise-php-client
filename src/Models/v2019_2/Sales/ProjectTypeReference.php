<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectTypeReference Version v2019_2
 *
 * Model for ProjectTypeReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ProjectTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Sales\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
