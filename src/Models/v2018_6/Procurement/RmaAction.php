<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaAction Version v2018_6
 *
 * Model for RmaAction
 *
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $name
 */
class RmaAction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string'
    ];
}
