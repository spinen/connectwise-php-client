<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalSecuritySetting Version v2018_5
 *
 * Model for PortalSecuritySetting
 *
 * @property Metadata $_info
 * @property bool $levelFive
 * @property bool $levelFour
 * @property bool $levelOne
 * @property bool $levelSix
 * @property bool $levelThree
 * @property bool $levelTwo
 * @property int $id
 * @property string $functionDescription
 * @property string $functionIdentifier
 */
class PortalSecuritySetting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'functionDescription' => 'string',
        'functionIdentifier' => 'string',
        'id' => 'integer',
        'levelFive' => 'boolean',
        'levelFour' => 'boolean',
        'levelOne' => 'boolean',
        'levelSix' => 'boolean',
        'levelThree' => 'boolean',
        'levelTwo' => 'boolean',
    ];
}
