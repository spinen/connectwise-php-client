<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalSecurityLevel Version v2018_6
 *
 * Model for PortalSecurityLevel
 *
 * @property Metadata $_info
 * @property boolean $isDefaultFlag
 * @property integer $id
 * @property string $caption
 * @property string $captionIdentifier
 */
class PortalSecurityLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'caption' => 'string',
        'captionIdentifier' => 'string',
        'id' => 'integer',
        'isDefaultFlag' => 'boolean',
    ];
}
