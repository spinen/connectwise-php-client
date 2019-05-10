<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class InOutType Version v2018_5
 *
 * Model for InOutType
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $description
 */
class InOutType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'description' => 'string',
        'id' => 'integer'
    ];
}
