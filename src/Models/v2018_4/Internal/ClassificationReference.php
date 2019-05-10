<?php

namespace Spinen\ConnectWise\Models\v2018_4\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ClassificationReference Version v2018_4
 *
 * Model for ClassificationReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Internal\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ClassificationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Internal\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
