<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalSecuritySetting
 *
 * @property integer $id
 * @property string $functionIdentifier
 * @property string $functionDescription
 * @property boolean $levelOne
 * @property boolean $levelTwo
 * @property boolean $levelThree
 * @property boolean $levelFour
 * @property boolean $levelFive
 * @property boolean $levelSix
 */
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
