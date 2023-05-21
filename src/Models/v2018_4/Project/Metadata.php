<?php

namespace Spinen\ConnectWise\Models\v2018_4\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Metadata Version v2018_4
 *
 * Metadata of the entity
 */
class Metadata extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'dateEntered' => Carbon::class,
        'lastUpdated' => Carbon::class,
    ];
}
