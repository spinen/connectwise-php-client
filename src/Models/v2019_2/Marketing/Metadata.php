<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Metadata Version v2019_2
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
