<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AutomateScriptReference Version v2019_3
 *
 * Required when notifyType is set to: "Run Connectwise Automate Script"
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class AutomateScriptReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
