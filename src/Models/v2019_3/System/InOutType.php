<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InOutType Version v2019_3
 *
 * Model for InOutType
 *
 * @property integer $id
 * @property string $description
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 */
class InOutType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
