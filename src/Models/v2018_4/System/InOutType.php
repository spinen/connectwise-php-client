<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InOutType Version v2018_4
 *
 * Model for InOutType
 *
 * @property integer $id
 * @property string $description
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
    ];
}
