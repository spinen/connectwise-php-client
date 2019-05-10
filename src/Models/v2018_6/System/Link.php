<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Link Version v2018_6
 *
 * Model for Link
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 * @property integer $id
 * @property integer $tableReferenceId
 * @property string $name
 * @property string $screenLink
 * @property string $url
 */
class Link extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'id' => 'integer',
        'name' => 'string',
        'screenLink' => 'string',
        'tableReferenceId' => 'integer',
        'url' => 'string',
    ];
}
