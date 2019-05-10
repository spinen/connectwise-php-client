<?php

namespace Spinen\ConnectWise\Models\v2019_1\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StructureReference Version v2019_1
 *
 * Model for StructureReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\Metadata $_info
 */
class StructureReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Internal\Metadata',
    ];
}
