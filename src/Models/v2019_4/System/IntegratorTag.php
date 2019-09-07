<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class IntegratorTag Version v2019_4
 *
 * Model for IntegratorTag
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $text
 */
class IntegratorTag extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'text' => 'string'
    ];
}
