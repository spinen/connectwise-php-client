<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Link Version v2019_1
 * 
 * Model for Link
 *
 * @property integer $id
 * @property string $name
 * @property integer $tableReferenceId
 * @property string $url
 * @property string $screenLink
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 */
class Link extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'tableReferenceId' => 'integer',
        'url' => 'string',
        'screenLink' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
