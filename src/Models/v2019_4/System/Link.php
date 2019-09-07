<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Link Version v2019_4
 *
 * Model for Link
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
        'screenLink' => 'string',
        'tableReferenceId' => 'integer',
        'url' => 'string'
    ];
}
