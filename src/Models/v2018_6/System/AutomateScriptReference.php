<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AutomateScriptReference Version v2018_6
 * 
 * Required when notifyType is set to: "Run Connectwise Automate Script"
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 */
class AutomateScriptReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
    ];
}