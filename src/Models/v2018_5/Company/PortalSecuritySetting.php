<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalSecuritySetting Version v2018_5
 *
 * Model for PortalSecuritySetting
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
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
    ];
}
