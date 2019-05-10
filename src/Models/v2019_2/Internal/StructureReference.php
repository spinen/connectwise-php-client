<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StructureReference Version v2019_2
 *
 * Model for StructureReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class StructureReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
