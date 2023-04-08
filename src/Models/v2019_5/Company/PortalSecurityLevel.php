<?php

namespace Spinen\ConnectWise\Models\v2019_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalSecurityLevel Version v2019_5
 *
 * Model for PortalSecurityLevel
 *
 * @property Metadata $_info
 * @property bool $isDefaultFlag
 * @property int $id
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
