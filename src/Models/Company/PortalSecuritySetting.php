<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class PortalSecuritySetting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'functionIdentifier' => 'string',
        'functionDescription' => 'string',
        'levelOne' => 'boolean',
        'levelTwo' => 'boolean',
        'levelThree' => 'boolean',
        'levelFour' => 'boolean',
        'levelFive' => 'boolean',
        'levelSix' => 'boolean',
    ];
}
