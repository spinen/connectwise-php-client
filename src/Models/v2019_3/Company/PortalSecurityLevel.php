<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalSecurityLevel Version v2019_3
 *
 * Model for PortalSecurityLevel
 *
 * @property integer $id
 * @property string $captionIdentifier
 * @property boolean $isDefaultFlag
 * @property string $caption
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
 */
class PortalSecurityLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'captionIdentifier' => 'string',
        'isDefaultFlag' => 'boolean',
        'caption' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
    ];
}
